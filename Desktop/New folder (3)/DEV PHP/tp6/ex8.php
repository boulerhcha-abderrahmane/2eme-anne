<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #divsel,#divni {
            display:none;
        }
    </style>
</head>
<body>
    <h2>Comment souhaitez vous cherchez le stagiaire ?</h2>
    <form action="" method="post">
    <label for="ch1">Par filière :</label> <input type="radio" name="ch" value="fil" id="ch1" onfocus="show(this)"><br>
    <label for="ch2">Par Numéro d'inscription : </label><input type="radio" name="ch" value="num" id="ch2" onfocus="show(this)"><br>
        <br><br>
    <div id=divsel>
    Choisir le nom de la filière : <select name="sel_fil">
        <?php 
        $DBcnx= new PDO('mysql:host=localhost;dbname=ofppt',
        'root','');
        $select =$DBcnx->query('SELECT * from filieres;');
        while ($data=$select->fetch()){
            $nomfil=$data['NOM'];$fil_id=$data['ID'];
            echo "<option value='$fil_id'>$nomfil</option>";
        }
        ?>
    </select>
    <input type="submit" value="Chercher">
    </div>

        <div id=divni>
        Saisir le numéro d'inscriotion : <input type="text" name="ni"><input type="submit" value="Chercher">
        </div>
        
    </form>
    <?php 
    if (isset ($_POST['ch'])){
        if($_POST['ch']=='fil'){
            $num_fil=$_POST['sel_fil'];
            $select=$DBcnx->query("SELECT * from stagiaires where filiere='$num_fil';");
            $data=$select->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $stg){
                foreach($stg as $att=>$val){
                    echo "$att: $val<br>";
                }
                echo '<br>';
            }
        }
        else{
            $ni_stg=$_POST['ni'];
            $select=$DBcnx->query("SELECT * from stagiaires where NI='$ni_stg';");
            $data=$select->fetch(PDO::FETCH_ASSOC);
            foreach($data as $att=>$val){
                echo "$att: $val<br>";
            }
        }
    }
    ?>
    <script>
        function show(self){
            if(self.value=='fil'){
                document.querySelector('#divsel').setAttribute('style','display:block;');
                document.querySelector('#divni').setAttribute('style','display:none;');
            }
            else{
                document.querySelector('#divni').setAttribute('style','display:block;');
                document.querySelector('#divsel').setAttribute('style','display:none;');
            }
        }
    </script>
</body>
</html>