document.querySelector(".sidebar ul li").on('click', function () {
    document.querySelector(".sidebar ul li.active").removeClass('active');
    document.querySelector(this).addClass('active');
});

document.querySelector('.open-btn').on('click', function () {
    document.querySelector('.sidebar').addClass('active');

});

document.querySelector('.close-btn').on('click', function () {
    document.querySelector('.sidebar').removeClass('active');

});