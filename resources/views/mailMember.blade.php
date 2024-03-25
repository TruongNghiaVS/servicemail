@php
    $email = $email;
    $fullName = $fullName;
    $password = $password;
@endphp

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

<br/>

<div class="content">
    <p>Chào bạn <strong> {{ $fullName }}</strong></p>
    <p>Chúc mừng bạn đã tạo tài khoản thành công tại Jobvieclam.com.</p>
    <p>Dưới đây là thông tin đăng nhập của bạn. Lưu ý rằng thông tin đăng nhập này là quan trọng và cần được bảo mật. Đừng chia sẻ thông tin này với bất kỳ ai khác:</p>
    <div>
      <strong>Mail Đăng Nhập: </strong> <span>{{ $email }}</span>
    </div>
    <div>
      <strong>Mật khẩu:</strong> <span>{{ $password }}</span>
    </div>
  
  
    <p>Bây giờ, bạn có thể tận dụng các tính năng tìm kiếm việc làm để khám phá và ứng tuyển vào các vị trí phù hợp với nhu cầu và kỹ của bạn. Đồng thời, bạn cũng có thể cập nhật hồ sơ của mình để tăng cơ hội được nhà tuyển dụng chú ý.</p>
    <p>Nếu bạn gặp bất kỳ vấn đề nào trong quá trình sử dụng hoặc có câu hỏi cần được giải đáp, vui lòng liên hệ với chúng tôi qua: </p>

    <div>
      <span>Email: </span> <a href="mailto:support@jobvieclam.com">Support@jobvieclam.com</a>
    </div>
    <div>
      <span>Điện thoại: </span> <a href="tel:+028 71000 555">028 71000 555</a>
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