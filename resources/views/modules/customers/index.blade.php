<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1" cellspacing="0">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',['id'=>1])}}">Xem</a> | <a href="{{route('customers.edit',['id'=>1])}}">Sửa</a> | <a href="{{route('customers.delete',['id'=>1])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Nguyễn Văn B</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',['id'=>2])}}">Xem</a> | <a href="{{route('customers.show',['id'=>2])}}">Sửa</a> | <a href="{{route('customers.delete',['id'=>2])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Văn C</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nguyễn Văn D</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Nguyễn Văn E</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
