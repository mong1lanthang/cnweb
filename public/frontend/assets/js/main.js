$(document).ready(function () {
    // Carousel 1 với 3 item hiển thị
    $(".owl-carousel-one").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1025: {
                items: 3,
            },
        },
    });

    // Carousel 2 với 4 item hiển thị
    $(".owl-carousel-two").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1025: {
                items: 4,
            },
        },
    });
});

// Mảng chứa danh sách ảnh
const images = document.querySelectorAll(".img-tour img");
let currentIndex = 0;

// Mở overlay và hiển thị ảnh phóng to
function openOverlay(index) {
    const overlay = document.getElementById("overlay");
    const overlayImage = document.getElementById("overlayImage");

    // Lưu lại chỉ số ảnh hiện tại
    currentIndex = index;

    // Hiển thị ảnh đã chọn
    overlayImage.src = images[currentIndex].src;

    // Hiển thị overlay
    overlay.style.display = "flex";
}

// Đóng overlay
function closeOverlay() {
    const overlay = document.getElementById("overlay");
    overlay.style.display = "none";
}

// Chuyển sang ảnh trước đó
function prevImage() {
    currentIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1;
    document.getElementById("overlayImage").src = images[currentIndex].src;
}

// Chuyển sang ảnh tiếp theo
function nextImage() {
    currentIndex = currentIndex === images.length - 1 ? 0 : currentIndex + 1;
    document.getElementById("overlayImage").src = images[currentIndex].src;
}

// Thêm sự kiện click vào mỗi ảnh trong gallery
images.forEach((img, index) => {
    img.addEventListener("click", () => openOverlay(index));
});

// Đóng overlay khi nhấp vào vùng ngoài ảnh
document.getElementById("overlay").addEventListener("click", (e) => {
    if (e.target === e.currentTarget) {
        closeOverlay();
    }
});

// // Hàm mở/đóng modal order_list
// function toggleBookingForm() {
//     const modal = document.getElementById("bookingFormModal");
//     modal.style.display = modal.style.display === "flex" ? "none" : "flex";
// }

// // Thêm sự kiện click vào tất cả các nút "Đặt Ngay"
// document.querySelectorAll(".btn-style").forEach((button) => {
//     button.addEventListener("click", function (event) {
//         event.preventDefault(); // Ngăn chặn hành vi mặc định của nút
//         toggleBookingForm();
//     });
// });
