<html>
<head>
    <title>Example to load select change</title>
</head>
<body>

    <form>
        <p>Please select a name: (select action)</p>
        <select name="name" id="select">
            <option>Select a name</option>
            <option value="1">Leonardo Rifeli</option>
            <option value="2">Leonardo Rifeli 2</option>
        </select>

        <br/>

        <div>
            <p id="returned"></p>
        </div>
    </form>

    <form>
        <p>Please insert your name: (input text action)</p>
        <input type="text" id="input-name" name="name" placeholder="Insert your name" />

        <br/>

        <div>
            <p id="returned-text"></p>
        </div>
    </form>

</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/system.js"></script>
</html>
