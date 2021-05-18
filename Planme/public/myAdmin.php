<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estiloPrueba.css">
    <title>Popup challenge</title>
</head>

<body>
    <button>Haz clic para ver el popup</button>
    <div class="popup-wrapper">
        <div class="popup">
            <div class="popup-close">x</div>
            <div class="popup-content">
                <h3>Ofertas libros JavaScript</h3>
                <p>¡No te pierdas las mejores ofertas de libros para aprender JavaScript!</p>
                <a href="https://amzn.to/2n9BJgk" target="_blank">¡Quiero verlos!</a>
                <form>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                </form>
            </div>
        </div>
    </div>

    <script>
        const button = document.querySelector('button');
        const popup = document.querySelector('.popup-wrapper');
        const close = document.querySelector('.popup-close');

        button.addEventListener('click', () => {
            popup.style.display = 'block';
        });

        close.addEventListener('click', () => {
            popup.style.display = 'none';
        });

        popup.addEventListener('click', e => {
            // console.log(e);
            if (e.target.className === 'popup-wrapper') {
                popup.style.display = 'none';
            }
        });
    </script>


    <p>Hola</p>
    <p>Hola</p>
    <p>Hola</p>
    <p>Hola</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris orci, tincidunt elementum nisl id, placerat volutpat justo. Nullam commodo tincidunt nunc sit amet rutrum. Sed vel velit non sem consequat ultrices et et lorem. Phasellus ut enim eros. Duis tortor dui, efficitur quis aliquam ut, elementum at dolor. Cras venenatis ex massa, ac interdum purus gravida sit amet. In vitae metus a tellus bibendum volutpat. In hac habitasse platea dictumst. Cras egestas hendrerit scelerisque. Etiam lacus dui, scelerisque vel euismod vel, ultricies non metus. Sed in erat neque. Aliquam auctor dignissim justo, quis porttitor odio malesuada id. Suspendisse fermentum ligula lacinia eros accumsan imperdiet. Vestibulum et tristique risus. Nullam tempus ligula at risus aliquet convallis.

        Cras pulvinar ullamcorper odio ac auctor. Sed facilisis suscipit venenatis. Integer finibus neque nisl, in varius leo ultricies non. Phasellus odio ante, aliquet vitae vulputate a, facilisis id erat. Nulla vitae imperdiet lectus. Aenean at rhoncus magna. Sed a luctus nibh, in vulputate quam. Duis metus lectus, bibendum non magna id, fermentum rhoncus erat. Sed lobortis mauris nisi. Nulla vestibulum lacinia mi non tempor. In in dictum dui. Donec vestibulum odio eget elit dapibus, vitae scelerisque eros accumsan.

        Suspendisse pellentesque enim lacus, ac rhoncus nibh feugiat nec. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin a magna in sem gravida commodo. Nam eu lectus eget neque iaculis tincidunt. Etiam ultrices ipsum malesuada mattis laoreet. Nulla ut risus vitae arcu ultrices rutrum eu ultricies risus. Nunc porta ullamcorper lectus sed blandit. Maecenas quis auctor enim, sed facilisis magna. Pellentesque velit nisi, sagittis vel ipsum sit amet, ornare tristique magna. Sed ullamcorper dignissim dolor, eget gravida nulla aliquet non. Mauris dignissim lobortis vulputate.

        Cras volutpat consequat libero, a sodales dolor maximus eget. Aliquam bibendum vel ipsum nec blandit. Proin commodo, elit ac efficitur mollis, augue metus semper erat, id facilisis urna mauris sit amet felis. Curabitur pulvinar lectus in luctus suscipit. Quisque imperdiet accumsan leo sit amet consectetur. Ut interdum aliquet nisl ultrices dignissim. Vestibulum ut massa in nulla vulputate aliquam vel sit amet justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet viverra sapien.

        Vestibulum aliquam ante ipsum, sit amet auctor justo sodales non. Morbi venenatis nunc non hendrerit pulvinar. Morbi id velit quam. Maecenas vel porttitor ipsum, euismod efficitur sapien. Vivamus at dapibus enim. Mauris finibus, nulla vitae euismod rutrum, arcu lectus volutpat mi, vitae condimentum justo odio a diam. Fusce elementum cursus eros non condimentum. Nulla facilisi. Aenean venenatis enim in turpis faucibus, non facilisis velit pretium.</p>
</body>

</html>