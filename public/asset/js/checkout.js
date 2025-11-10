const form = document.querySelector('form');
const requiredFields = form.querySelectorAll('[required]');

function validateForm(event) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var address = document.getElementById('address').value.trim();
    var errorMessage = '';

    if (name === '') {
        errorMessage += 'Tên là bắt buộc.\n';
    }

    if (email === '') {
        errorMessage += 'Email là bắt buộc.\n';
    } else {
        // Kiểm tra định dạng email
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            errorMessage += 'Email không hợp lệ.\n';
        }
    }

    if (address === '') {
        errorMessage += 'Địa chỉ là bắt buộc.\n';
    }

    if (errorMessage !== '') {
        alert(errorMessage);
        event.preventDefault(); // Ngăn form submit nếu có lỗi
    }
}

// Thêm sự kiện vào form khi trang đã tải xong
window.onload = function() {
    var form = document.getElementById('myForm');
    form.addEventListener('submit', validateForm);
}
