window.onload = function() {
    const img = document.getElementById('img');
    let position = 0; // 初期位置
    const speed = 4; // 動くスピード

    function moveImage() {
        position += speed;
        img.style.transform = `translateX(${position}px)`;

        // 画面右端に到達したら左に戻す
        if (position > window.innerWidth) {
            position = -img.width;
        }

        requestAnimationFrame(moveImage); // アニメーションの継続
    }

    moveImage();
};
