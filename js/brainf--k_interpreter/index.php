<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Spencer's Brainfuck Interpreter</title>

    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script type="text/javascript" src="resources/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="resources/script.js"></script>
</head>

<body>

    <!-- Overlay to dim screen for user input prompts -->
    <div id="overlay">

    </div>

    <!--## Header (the top bar of the page) -->
    <div id="header">
        <div id="header-container">
            <!--## Logo image Pod -->
            <div id="logo">
                <img class="rounded" src="resources/logo.jpg" />
            </div>
        </div>
    </div>


    <!-- Main Content (lower part of page) -->
    <div id="main-content">
        <!-- Interpreter Div-->
        <div id="interpreter" class="rounded">
            <h3>Brainfuck Interpreter</h3>
            <p>
            <textarea id="intrp_input" class="rounded"></textarea>
            <input id="submit_intrp_input" type="submit" class="rounded" value=" Run BrainFuck code! " onclick="BFI.interpret('intrp_input')" />
            </p>
            <p>
            <textarea id="intrp_output" class="rounded"></textarea>
            <input id="clear_intrp_output" type="submit" class="rounded" value="Clear" onclick="clearTextArea('intrp_output')"/>
            </p>
        </div>    
    
        <!-- Ascii To Brainfuck converter Div-->
        <div id="converter" class="rounded">
            <h3>Ascii to Brainfuck Converter</h3>
            <p>
            <textarea id="conv_input" class="rounded"></textarea>
            <input id="submit_conv_input" type="submit" class="rounded" value=" Convert to Brainfuck! " onclick="BFI.asciiToBF('conv_input')" />
            </p>
            <p>
            <textarea id="conv_output" class="rounded"></textarea>
            <input id="clear_conv_output" type="submit" class="rounded" value="Clear" onclick="clearTextArea('conv_output')"/>
            </p>
        </div>    
    </div>
    
    <script type="text/javascript">
        BFI.initialize(30000, 'intrp_output', 'conv_output');
    </script>
    
    <div class="footer">
        <p>&copy;Spencer Bartz 2015</p>
        <p><a href="http://www.spencerbartz.com">spencerbartz.com</a></p>
    </div>

</body>
</html>