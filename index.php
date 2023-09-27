<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    
    <section>
        <div class="container">
            <div class="tittle">
                <h2>Word And Latter Counter In PHP</h2>
            </div>
            <div class="user-word">
                <textarea placeholder="write something" name="user-word" id="user-word" cols="30" rows="15"></textarea>
            </div>

            <div class="tittle">Totall word is <span id="total-word"></span></div>
        </div>
    </section>


    <script>
        $(document).ready(function () {
            $('textarea').keyup(function(){
                $.ajax({
                    type: 'POST',
                    url: 'count.php',
                    data: {
                        word: $('#user-word').val()
                    },
                    success:function(data){
                        $('#total-word').html(data);
                    }
                })
            })
        })
    </script>
</body>
</html>