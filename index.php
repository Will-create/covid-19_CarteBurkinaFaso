<!Doctype html>
<html>
  <head>
    <title></title>
    <style>
    #carte{
      width:100%;
      height:500px;
      margin-top:50px;
    }
    </style>
  </head>
  <body>
  <form action="include/datafile.php" method="POST">
    <select name="id" required>
      <option>Selection de la zone toucher</option>
      <option value="Boucle du Mouhoun">Boucle du Mouhoun</option>
      <option value="Cascades">Cascades</option>
      <option value="Centre">Centre</option>
      <option value="Centre-Est">Centre-Est</option>
      <option value="Centre-Nord">Centre-Nord</option>
      <option value="Centre-Ouest">Centre-Ouest</option>
      <option value="Centre-Sud">Centre-Sud</option>
      <option value="Est">Est</option>
      <option value="Hauts-Bassins">Hauts-Bassins</option>
      <option value="Nord">Nord</option>
      <option value="Plateau-Central">Plateau-Central</option>
      <option value="Sahel">Sahel</option>
      <option value="Sud-Ouest">Sud-Ouest</option>
    </select>
    <input name="casconfirme" type="number" placeholder="Cas confirmes">
    <input name="casgueri" type="number" placeholder="Cas gueris">
    <input name="casdecede" type="number" placeholder="Cas deces">
    <input  type="submit">
  </form>
    <div id="carte">
      
    </div>
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/core.js" ></script>
    <script src="js/maps.js" ></script>
    <script src="js/geodata/burkinaFasoHigh.js"></script>
    <script src="js/animated.js" ></script>
    <script src="js/script.js" ></script>
  </body>
</html>