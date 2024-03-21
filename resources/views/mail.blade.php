@php
    $codeGen = $codeGenerate;


@endphp
<style>
        .red {
            color:red;
        }
        .footer {
            margin-top: 40px;
        }
        .bluecolor{
            color: rgb(0, 21, 255);
        }
        span{
            display: block;
        }
        .header {
         
            text-align: center;
            background: orange;
            color: #ffffff ;
        }
        .bodyContent {
            width: 600px;
            margin:auto;
        }
        .white{
            color: #ffffff ;
        }
</style>

   <div class ="bodyContent" >
   <div class="header">
Để email luôn được vào inbox, bạn vui lòng thêm <a class="white">support@jobvieclam.com</a> vào danh bạ hoặc đánh dấu email
này "Không phải thư quảng cáo / spam"
</div>
    </br>
    </br>
<strong class="red">Kích Hoạt Tài Khoản Mới tại Jobvieclam.com</strong>
<p>Kính chào Quý công ty Cong ty, khách hàng</p>

<p>Xin chân thành cảm ơn Quý công ty đã tạo tài khoản tuyển dụng trên Jobvieclam.vn – Mạng Việc làm & Tuyển dụng hàng đầu thế giới.</p>
<ul>
    <li>
        Email đăng ký: <strong> {{$email}}</strong>
    </li>
    <li>
        Mật khẩu: &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <strong>********</strong>
    </li>

</ul>

<p>Vui lòng click vào <a class="bluecolor" href="https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}">đây</a> để hoàn tất quá trình tạo tài khoản và bắt đầu Đăng Tuyển, Tìm Hồ Sơ Ứng Viên cũng như sử dụng các dịch vụ khác.</p>

<p>Hoặc copy đường link bên dưới và dán vào thanh địa chỉ của trình duyệt để kích hoạt tài khoản</p>
<a href="https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}" class="bluecolor">https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}</a>
<p>Lưu ý: Email kích hoạt này chỉ có giá trị trong vòng 7 ngày kể từ ngày đăng ký.</p>
<p>Nếu có bất kỳ yêu cầu hoặc thắc mắc, vui lòng liên hệ Nhân viên Kinh doanh hoặc Phòng Dịch vụ Khách hàng của chúng tôi để được hỗ trợ nhanh nhất.</p>
<p>Email: <a href = "mailto: contact@jobvieclam.com">contact@jobvieclam.com</a></p>
<p>Điện thoại: (848) 3822 6060</p>

<di class="footer">
    <span>Trân trọng,</span>
    <span>Phòng Dịch vụ Khách hàng</span>
    <span>Jobvieclam.com</span>
    
</div>





    </div>
