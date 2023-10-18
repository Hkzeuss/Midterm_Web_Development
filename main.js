// Đảm bảo rằng DOM đã được tải xong
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const dataList = document.getElementById('data_list');

    // Bắt sự kiện gửi biểu mẫu
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Ngăn chặn việc gửi mặc định của biểu mẫu

        // Lấy giá trị từ các trường trong biểu mẫu
        const idStudent = document.getElementById('id_student').value;
        const firstName = document.getElementById('first_name').value;
        const lastName = document.getElementById('last_name').value;
        const sex = document.querySelector('input[name="sex"]:checked').value;
        const birthDate = document.getElementById('birth_date').value;

        // Kiểm tra dữ liệu
        if (idStudent && firstName && lastName && sex && birthDate) {
            // Tạo một hàng trong bảng
            const row = dataList.insertRow();
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);
            const cell4 = row.insertCell(3);
            const cell5 = row.insertCell(4);
            cell1.innerHTML = idStudent;
            cell2.innerHTML = firstName;
            cell3.innerHTML = lastName;
            cell4.innerHTML = sex;
            cell5.innerHTML = birthDate;

            // Xóa dữ liệu sau khi thêm vào bảng
            form.reset();
        } else {
            alert('Vui lòng điền đầy đủ thông tin.');
        }
    });
});
