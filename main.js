document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    var firstName = document.getElementById('first_name').value;
    var lastName = document.getElementById('last_name').value;
    var sex = document.querySelector('input[name="sex"]:checked').value;
    var birthDate = document.getElementById('birth_date').value;

    var newRow = document.createElement('tr');
    var firstNameCell = document.createElement('td');
    firstNameCell.textContent = firstName;
    var lastNameCell = document.createElement('td');
    lastNameCell.textContent = lastName;
    var sexCell = document.createElement('td');
    sexCell.textContent = sex;
    var birthDateCell = document.createElement('td');
    birthDateCell.textContent = birthDate;

    newRow.appendChild(firstNameCell);
    newRow.appendChild(lastNameCell);
    newRow.appendChild(sexCell);
    newRow.appendChild(birthDateCell);

    document.getElementById('data_list').appendChild(newRow);

    // Gửi dữ liệu lên máy chủ
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_form.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Xử lý kết quả nếu cần
        }
    };
    xhr.send("firstName=" + firstName + "&lastName=" + lastName + "&sex=" + sex + "&birthDate=" + birthDate);

    // Xóa nội dung của các trường nhập để chuẩn bị cho việc nhập thông tin mới
    document.getElementById('first_name').value = '';
    document.getElementById('last_name').value = '';
    document.querySelector('input[name="sex"]:checked').checked = false;
    document.getElementById('birth_date').value = '';
});
