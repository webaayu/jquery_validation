<!doctype html>
<html>
    <head>
    <title>Application Form</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="custom01.js"></script>
    </head>
    <body class="body">
        <div class="div">    
            <h2 class="h2">Application Form</h2>
            <form id="my_form" name="my_form" action="form_submit.php" method="POST">
                <div class="new">
                    <div class="component">
                        <label>Full Name</label>
                        <input type="text" id="name" class="inpt" name="name" >
                        <span id="nm" class="valid"></span>
                    </div>
                    
                    <div class="component">
                        <label>Email Address</label>
                        <input id="email" class="inpt" type="text" name="email">
                        <span id="eml" class="valid"></span>
                    </div>
                    
                    <div class="component">
                        <label>Mobile Number</label>
                        <input id="tel" class="inpt" type="text" name="tel">
                        <span id="ph" class="valid"></span>
                    </div>
                    
                    <div class="component">
                        <label>Country</label>
                        <select class="select" id="optn" name="option">
                            <option class="option" value="">select</option>
                            <option class="option" value="India">India</option>
                            <option class="option" value="Australia">Australia</option>
                            <option class="option" value="Canada">Canada</option>
                            <option class="option" value="Britan">Britan</option>
                        </select>
                        <span id="opt" class="valid"></span>
                    </div>
                        
                    <div class="component">
                        <label>Gender</label>
                            <div class="choice" id="sel_rd">
                                <input type="radio" id="male" name="gender" value="M" onclick = "this.value"  >Male
                                <input type="radio" id="female" name="gender" value="F" onclick = "this.value"  >Female
                                <span id="rd" class="valid"></span>
                            </div>
                    </div>

                    <div class="component">
                        <label>Hobbies</label>
                        <span id="italic">(optional)</span>
                            <div class="choice">
                                <input type="checkbox">Sports
                                <input type="checkbox">Movies
                                <input type="checkbox">Music
                            </div>
                    </div>

                    <div class=submt>
                        <button type="submit" id="sub" class="inpt" value="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>