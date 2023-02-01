<?php
$page_title = "Startsida";
include("includes/header.php");
?>

<h2>Startsidan</h2>

<h3>Frågor och svar</h3>
<br>
<p><strong>Har du tidigare erfarenhet av utveckling med PHP?</strong></p>
<p>Nej, jag har aldrig utvecklat något med PHP tidigare.</p>
<br>
<p><strong>Beskriv kortfattat vad du upplever är fördelarna med att använda PHP för att skapa webbplatser.</strong></p>
<p>Det är enklare att göra ändringar och jag är helt säker att det blir lika design på alla sidor. 
    Utan PHP är det lätt att missa ändra något på en undersida. Jag kommer kunna återanvända mina mallar för fler webbplatser.</p>
    <br>
    <p><strong>Hur har du valt att strukturera upp dina filer och kataloger?</strong></p>
<p>Jag har använt samma struktur som visas i exemplen i kursen, en undermapp för JavaScript, en för CSS och en för Includes. 
    alla undersidor ligger i huvudmappen.</p>
    <br>
    <p><strong>Har du följt guiden, eller skapat på egen hand?</strong></p>
<p>Jag har följt guiden</p>
    <br>
<p><strong>Har du gjort några förbättringar eller vidareutvecklingar av guiden?</strong></p>
<p>Jag ändrade menyn för att kunna ha hamburgermeny för små skärmstorlekar.</p>
    <br>
<p><strong>Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver (XAMPP, LAMP, MAMP eller liknande)?</strong></p>
<p>Jag har använt Visual Studio Code för all kod tillsammans med XAMPP och versionshanterat i Github.</p>
    <br>
<p><strong>Har något varit svårt med denna uppgift?</strong></p>
<p>Det svåraste var att få PHP att fungera i Visual Studio Code och att få XAMPP/Github att fungera. 
    Jag bytte dator för en vecka sen och fick installera om allt och vissa inställningar blev knasiga.
    Jag stötte på en spännande sak när jag skapade JavaScript-filen för menyn. När jag döper den till "main.js" fungerar inte funktionaliteten.
    Döper jag den till "test.js" eller "menu.js" fungerar det. Ändrar jag tillbaka till main fungerar det inte. 
    Jag har inte kommit fram till varför det blir så och har döpt filen till "menu.js" av den anledningen.
</p>

<?php
include("includes/sidebar.php");
include("includes/footer.php");