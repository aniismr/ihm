<?php
class utilisateur{
    private $id;
    private $nom;
    private $pw;
    private $email;
    private $prenom;
    private $etat;
    private $photo;
    private $skills;
    private $desc;
    private $type;

    private $location;
    private $sal_min;
    public function __construct($email,$pw="",$type="",$nom="",$prenom="",$location="",$desc="",$sal_min=""){
        $this->pw=$pw;
        $this->email=$email;
        $this->type=$type;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->location=$location;
        $this->sal_min=$sal_min;
        $this->desc=$desc;


    }
    public function getDesc(){
        return $this->desc;
    } 

     public function adduser(){
        try{
        global $db;
        $req=$db->prepare('insert into utilisateur(email,mdp,type,nom,prenom,sal_min,description,ville,date_inscrit,photo)values(?,?,?,?,?,?,?,?,SYSDATE(),?);');
        $req->execute(array($this->email,$this->pw,$this->type,$this->nom,$this->prenom,$this->sal_min,$this->desc,$this->location,'user-avatar-placeholder.png'));
        return $req;
    }

    catch(Exception $e){
        echo $e->getMessage();
    }
}
    public function updateUser($id){
        global $db;
    
        $req=$db->prepare('update utilisateur set 
        sal_min=?,
        description=?,
        ville=?,
          where id=?;
        ');
        $req->execute(array($this->sal_min,$this->desc,$this->location,$id));
        return $req;
    }
    public static function getNbJobbeurs(){
        global $db;
        $req = $db->prepare('select count(*) as nb from utilisateur where type="jobbeur";');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
    public function getName(){
        return $this->nom;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getId(){
        return $this->id;   
    }
    public function getType(){
        return $this->type;
    }
    public function getPw(){
        return $this->pw;
    }
    public function checkLogin(){
        global $db;
        $req=$db->prepare("select id,photo,nom, prenom,etat,type,num_tel  from utilisateur where email=? and mdp=?;");
        $req->execute(array($this->email,$this->pw));
        $res=$req->fetch();
        if (isset($res['nom'])){
            $this->id=$res['id'];
            $this->photo=$res['photo'];
            $this->etat=$res['etat'];
            $this->nom=$res['nom'];
            $this->prenom=$res['prenom'];
            $this->type=$res['type'];
            $this->num_tel=$res['num_tel'];
            return true ;
    }
        else
            return false;
    }
    public static function getUser($id){
        global $db;
        $req=$db->prepare("select * from utilisateur where id=? ;");
        $req->execute(array($id));
        $res=$req->fetch();
        return $res;
    }
    public static function getJobeurs($cat="",$skill="")
    {
        global $db ;
        if($cat!="" && $skill!=""){
             
            $catid=categorie::getId($cat);
            $skid=skill::getId($skill); 
            $req=$db->prepare("select * from utilisateur 
            inner join(select categorie.nom as cnamei, skilluser.id_user as idn ,skill.id as cskill,categorie.id as cname from skill,skilluser,categorie where skill.id=skilluser.id_skill and categorie.id=skill.id_cat) as c 
            on utilisateur.id=c.idn 
            and c.cname=?
            and c.cskill=?
            and utilisateur.type='jobbeur';
            " );
            $req->execute(array($catid,$skid));
        }else if($cat!=""){
           
            $catid=categorie::getId($cat);
            $req=$db->prepare("select * from utilisateur 
            inner join(select categorie.nom as cnamei, skilluser.id_user as idn ,skill.id as cskill,categorie.id as cname from skill,skilluser,categorie where skill.id=skilluser.id_skill and categorie.id=skill.id_cat) as c 
            on utilisateur.id=c.idn 
            and c.cname=?
            and utilisateur.type='jobbeur'
     ;");
            $req->execute(array($catid));
        }else{
            
            $req=$db->prepare("select * from utilisateur 
            inner join(select categorie.nom as cnamei, skilluser.id_user as idn ,skill.id as cskill,categorie.id as cname from skill,skilluser,categorie where skill.id=skilluser.id_skill and categorie.id=skill.id_cat) as c 
            on utilisateur.id=c.idn 
            and utilisateur.type='jobbeur';");
            $req->execute();
        }

        return $req;
    }
    public static function getCategorie($id ){
        global $db;
        $req=$db->prepare("select categorie.nom from skilluser ,skill ,categorie where id_user=? and id_skill=skill.id and skill.id_cat=categorie.id; ");
        $req->execute(array($id));
        return $req;
    }
    public static function getJobS($id){
        global $db;
        $req=$db->prepare("select * from utilisateur 
        inner join(select categorie.nom as cnamei, skill.nom as cskilli, skilluser.id_user as idn ,skill.id as cskill,categorie.id as cname from skill,skilluser,categorie where skill.id=skilluser.id_skill and categorie.id=skill.id_cat) as c 
        on utilisateur.id=c.idn 
        and utilisateur.id=?");
        $req->execute(array($id));
        return $req;
    }
    
}


