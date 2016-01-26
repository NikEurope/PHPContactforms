<!-- FORM -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>FORM</title>

</head>

<body>
<!-- FORM -->
</br>
</br>

<form action="ma-page" method="post">
<div>
  <label for="nom>">Nom :</label>
  <input type="text" id="nom" name="user_name"/>
</div>

<div>
  <label for="courriel">Courriel :</label>
  <input type="email" id="courriel" name="user_email"/>
</div>

<div>
  <label for="message">Message :</label>
  <textarea id="message" name="user_message"></textarea>
</div>

<div class="button">
<button type="submit">Envoyer votre message</button>
</div>

</form>
</div>


<!-- THE ENHD FORM -->

<!-- CSS -->

<style>
form{
  margin: 2px;
  padding: 2em;
  border: 1px solid #CCC;
  border-radius: 3em;
  width: 400px;
}
form div+div{
  margin-top: 2em;

}
label{
  display: inline-block;
  width: 100px;
  text-align: right;
  color: red;
}
imput, textarea{
  font: 1em sans-serif;
  width: 240px;
  height: 100px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  border: 1px solid #999;
}
imput:focus, textarea:focus{
  border-color: red;
}
textarea{
  vertical-align: top;
  height: 5em;
  resize: vertical;
}
.button{
  padding-left: 85px;

}
button{
  margin:2%;
  padding: 1%;
  color: red;
}

</style>

</body>

</html>
