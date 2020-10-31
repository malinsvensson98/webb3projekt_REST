# Rest
För att läsa data ut databasen med GET: <br/>
Kurser: https://malinsvensson.se/miun/webbutveckling3/projekt/api/read.php <br/>
Arbeten: https://malinsvensson.se/miun/webbutveckling3/projekt/api_work/read.php <br/>
Webbplatser: https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/read.php <br/>
<br/>
För att läsa ut data med valfritt id med GET: (exempel för id 1) <br/> 
Kurser: https://malinsvensson.se/miun/webbutveckling3/projekt/api/read_one.php?id=1 <br/>
Arbeten: https://malinsvensson.se/miun/webbutveckling3/projekt/api_work/read_one.php?work_id=1 <br/>
Webbplatser: https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/read_one.php?web_id=1 <br/>
<br/>
För att radera data med valfritt id med DELETE: <br/>
Kurser: https://malinsvensson.se/miun/webbutveckling3/projekt/api/delete.php?id=1 <br/>
Arbeten: https://malinsvensson.se/miun/webbutveckling3/projekt/api_work/delete.php?work_id=1 <br/>
Webbplatser: https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/delete.php?web_id=1 <br/>
<br/>
För att uppdatera data med valfritt id med UPDATE:  <br/>
Kurser: https://malinsvensson.se/miun/webbutveckling3/projekt/api/update.php?id=1 <br/>
Arbeten: https://malinsvensson.se/miun/webbutveckling3/projekt/api_work/update.php?work_id=1 <br/>
Webbplatser: https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/update.php?web_id=1 <br/>

## Api 
Detta repo innehåller tre skillda mappar för API kopplad till de tre olika tabellerna i databasen där de olika fetch-anropen görs till de ovanstående länkarna. 

## Classes 
Innehåller tre olika klasser med funktioner kopplade till de tre olika tabellerna. 
Skillnaden i funktionerna är vart databas-frågorna görs samt informationen som hämtas och läggs till baserat på vilken data som ska vara i de olika tabellerna. 

## Config 
Innehåller uppgifter för koppling till databasen. 
