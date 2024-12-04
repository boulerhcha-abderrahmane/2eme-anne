<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    span{
        display:none;
        color:red ;
    }
   </style>
</head>
<body>

<form action="exo8TP3p2.php" method="post" id="f1" >
    <label for="">Nom :</label><span>*</span><input type="text" class="zone" name="nom" ><br>
    <label for="">Prenom :</label><span>*</span><input type="text"   class="zone" name="pr" ><br>
    
    <label for="">Matricule :</label><span>*</span><input type="text" class="zone"  name="mt" ><br>
    <label for="">Commentaire : <textarea name="" id=""></textarea> <br>
    <input type="button" value="Envoyer" onclick="valider()" id="b"  >
</form>
    

<script>
function valider(){
let T=document.querySelectorAll(".zone") ;
let c=0 ;
    for(i=0 ;i<T.length ;i++){
        if(T[i].value=="" ){
            T[i].previousElementSibling.style.display="inline";
        }
        else{
            T[i].previousElementSibling.style.display="none";
            c++ ;
        }
    }

    if(c==3){
        document.getElementById("b").setAttribute("type","submit");
        document.getElementById("b").setAttribute("name","btn");
        document.getElementById("f1").submit() ;
    }



}

</script>
</body>
</html>