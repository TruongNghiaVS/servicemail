
@php
    $codeGen = $codeGenerate;
    $fullName = $fullName;
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
<strong class="red">Cấp lại mật khẩu</strong>
<p>Kính chào {{$fullName}}</p>

<p>Chúng tôi vừa nhận được yêu cầu cấp lại mật khẩu cho tài khoản Nhà tuyển dụng của Quý công ty trên jobvieclam.vn</p>


<p>Vui lòng click vào <a class="bluecolor" href="https://tuyendung.jobvieclam.com/employer/forgotpassword?code={{$codeGen}}">đây</a> để tạo mật khẩu mới. Hoặc copy đường link bên dưới dán vào thanh địa chỉ của trình duyệt:.</p>
<a href="https://tuyendung.jobvieclam.com/employer/forgotpassword?code={{$codeGen}}" class="bluecolor">https://tuyendung.jobvieclam.com/employer/forgotpassword?code={{$codeGen}}</a>

<p>Nếu không thực hiện các thao tác này thì mật khẩu vẫn giữ nguyên không thay đổi.</p>

<p>Lưu ý: Vui lòng bỏ qua thư này nếu Quý công ty không cần gửi yêu cầu đến chúng tôi.</p>
<p>Đây là email tự động, vui lòng không trả lời email này </p>
<p>Nếu có bất kỳ yêu cầu hoặc thắc mắc, vui lòng liên hệ Nhân viên Kinh doanh hoặc Phòng Dịch vụ Khách hàng của chúng tôi để được hỗ trợ nhanh nhất.</p>
<p>Email: <a href = "mailto: contact@jobvieclam.com">contact@	.com</a></p>
<p>Điện thoại: (848) 3822 6060</p>

<di class="footer">
    <span>Trân trọng,</span>
    <span>Phòng Dịch vụ Khách hàng</span>
    <span>Jobvieclam.com</span>
    
</div>





    </div>
