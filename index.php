<html>
    <head>
        <title>TestForm</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
        $(function() {
            var availableTags = [
                "Beware",
                "Guillotine",
                "Spread Eagle Cross the Block",
                "Lord of the Game",
                "Takyon(Death Yon)",
                "Cut Throat",
                "Klink",
                "Culture Shock",
                "Get Got",
                "The Fever(Aye Aye)",
                "Lost Boys",
                "Black Jack",
                "Hustle Bones",
                "I've Seen Footage",
                "Double Helix",
                "System Blower",
                "The Cage",
                "Punk Weight",
                "Fuck That",
                "Bitch Please",
                "Hacker",
                "Come up and get me",
                "Lil Boy",
                "No Love",
                "Black Dice",
                "World of Dogs",
                "Lock your doors",
                "Whammy",
                "Hunger games",
                "Deep Web",
                "Stockton",
                "Pop",
                "Bass rattle stars out the sky",
                "Artificial death in the west",
                "You might think he loves you for your money but I know what he really loves you for it's your brand new leopard skin pillbox hat",
                "Anne Bonny",
                "Two Heavens",
                "This is Violence Now(Dont get me wrong)",
                "Birds",
                "Feels like a wheel",
                "Im Overflow",
                "Big House",
                "Government Plates",
                "Bootleg(Dont need your help)",
                "Whatever I want(Fuck who's watching)",
                "Up My Sleeves",
                "Billy Not Really",
                "Black Quarterback",
                "Say Hey Kid",
                "Have A Sad Cum BB",
                "Fuck Me Out",
                "Voila",
                "Big Dipper",
                "I Break Mirrors With My Face In The United States",
                "Inanimate Sensation",
                "Turned Off",
                "Why A Bitch Gotta Lie",
                "Pss Pss",
                "The Powers That B",
                "Beyond Alive",
                "Centuries of Damn",
                "On GP",
                "Death Grips 2.0",
            ];
            $( "#songs" ).autocomplete({
                source: availableTags
            });
        });
        </script>
         <script>
        $(function() {
            var availableTags = [
                "Exmilitary",
                "The Money Store",
                "No Love Deep Web",
                "Government Plates",
                "The Powers That B"
            ];
            $( "#albums" ).autocomplete({
                source: availableTags
            });
        });
        </script>
        <script>
        function showResults(){
            window.location.href = "./results.html";   
        }
        </script>
    </head>
    <body>
        <form method="post" action="./handler.php">
        Song Title:<br>
        <input id="songs" type="text" name="songTitle"><br><br>
        Album:<br>
        <input id="albums" type="text" name="album">
        <br>
        <br>
        <br>
        Rating:
        <select name="Rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>
        Thoughts:<br>
        <br>
        <textarea name="thoughts" rows="25" cols="150"></textarea><br><br>
        <input type="submit" name="submit" id="submit" value="Submit" />
        </form>
        
        <form method="post" action="results.php">
        <button onclick="showResults();" type="button">See Results</button>
        </form>
    </body>
</html>
