@php
    $codeGen = $codeGenerate;
    $email = $email;
    $pass = $password;
    https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}

@endphp


   <!-- <div class ="bodyContent" >
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





    </div> -->

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        /* Reset styles */
        body, p, h1, h2, h3, h4, h5, h6, ul, ol, li {
            margin: 0;
            padding: 0;
        }
        
        body {
          font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
        
        .container {
       
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: start;
            margin-bottom: 30px;
     
            align-items: center;
           
        }

        .titleNotifySection {
           
        }
        .titleNotify {
            color: #333;
            margin-bottom: 30px;
            font-size: 17px;
            text-transform: uppercase;
            font-weight: 500;
        }
        h6 {
          font-size: 16px !important;
            color: #333;
         
            font-weight: 500;
        }
       
        .content p,.content div, .content span {
    
          line-height: 160%;
          
        }
        
        .footer {
            text-align: start;
            margin-top: 30px;
        }
     
        .company-name {
          color: #981B1E !important;
        }
        .text-center {
          text-align: center;
        }
    </style>
</head>
<body>
    <div>

<br/>

<div class="content">
    <p>Kích chào Quý Công ty,</p>
    <p>cảm ơn bạn đã đăng ký tài khoản tuyển dụng trên trang web tìm kiếm việc làm Jobvieclam.com. Để bắt đầu sử dụng các tính năng tuyển dụng, vui lòng kích hoạt tài khoản của mình bằng cách nhấp vào đường link dưới đây:</p>
    <p >
      Tên tài khoản công ty: <span class="company-name">
     {{ $fullName }}
    </span> </p>
    
    <p>Link kích hoạt: <a href="https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}"  rel="noopener noreferrer">https://tuyendung.jobvieclam.com/employers/active?code={{$codeGen}}</a></p>
    <p>Lưu ý: link kích hoạt chỉ có hiệu lực trong 7 ngày kể từ ngày đăng ký.</p>
    <p>Dưới đây là thông tin đăng nhập. Vì lý do bảo mật xin vui lòng lưu trữ thông tin này một cách an toàn và không chia sẻ với bất kỳ ai khác:</p>

    <div>
      <strong>Mail Đăng Nhập: </strong> <span>{{$email}}</span>
    </div>
    <div>
      <strong>Mật khẩu:</strong> <span>{{$pass}}</span>
    </div>

    <p>Khi đã đăng nhập thành công, bạn sexcos quyền truy cập vào các tính năng quản lý các công việc tuyển dụng, xem hồ sơ ứng viên và quản lý thông tin tài khoản.</p>
    <p>Hy vọng rằng Jobvieclam.com sẽ mang lại cho bạn trải nghiệm tốt nhất trong việc tìm kiếm và quản lý tài nguyên nhân sứ.</p>
    <p>Nếu bạn gặp bất kỳ vấn đề nào trong quá trình sử dụng hoặc có câu hỏi cần được giải đáp, vui lòng liên hệ với chúng tôi qua:</p>
    <div>
      <span>Email: </span> <a href="mailto:support@jobvieclam.com">Support@jobvieclam.com</a>
    </div>
    <div>
      <span>Điện thoại: </span> <a href="tel:+(848) 3822 6060">(848) 3822 6060</a>
    </div>
</div>
<div class="footer">
  <p>Trân trọng,</p>
  <p>Phòng Dịch vụ Khách hàng,</p>
</div>

<style>
.colorsi{
  color: #0070C0 ;
}
.sinature strong {
  font-weight: 500;
}
.sinature .nameCompany {
  font-weight: bold;
  font-size: 14px;
}
.sinature p {
  color: #222222;
}

.nameCompany{
  color: #0070C0;
}
</style>


----------------------------------------------------
<div class ="sinature"> 

  <span class="colorsi nameCompany">Vietstar Group Joint Stock Company </span></br>
  <p> <strong class="colorsi"> Head office: </strong> Floor 2nd, GMA Building, 307/6 Nguyen Van Troi, Ward 1, Tan Binh District, HCMC.  </p>
  <p> <strong class="colorsi"> Tel: </strong> (+84) 2871 000 555  </p>
  <p> <strong class="colorsi"> Mobile: </strong>0866.823.799 – 028.7100555  </p>
  <p> <strong class="colorsi"> Website: </strong> www.vietstargroup.vn  </p>
  <img src ="https://jobvieclam.com/sinatureMail.jpg">

</div>
</body>
</html>