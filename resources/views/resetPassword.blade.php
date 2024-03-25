
@php
$codeGen = $codeGenerate;
$fullName = $fullName;
@endphp
<!-- <style>
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
<p>Chào {{$fullName}}</p>

<p>Chúng tôi vừa nhận được yêu cầu cấp lại mật khẩu cho tài khoản Ứng viên của Quý khách trên jobvieclam.vn</p>


<p>Vui lòng click vào <a class="bluecolor" href="http://jobvieclam.com/member/forgotpassword?code={{$codeGen}}">đây</a> để tạo mật khẩu mới. Hoặc copy đường link bên dưới dán vào thanh địa chỉ của trình duyệt:.</p>
<a href="http://jobvieclam.com/member/forgotpassword?code={{$codeGen}}" class="bluecolor">http://jobvieclam.com/member/forgotpassword?code={{$codeGen}}</a>

<p>Nếu không thực hiện các thao tác này thì mật khẩu vẫn giữ nguyên không thay đổi.</p>

<p>Lưu ý: Vui lòng bỏ qua thư này nếu bạn không gửi yêu cầu đến chúng tôi.</p>
<p>Đây là email tự động, vui lòng không trả lời email này </p>
<p>Nếu có bất kỳ yêu cầu hoặc thắc mắc, vui lòng liên hệ Nhân viên Kinh doanh hoặc Phòng Dịch vụ Khách hàng của chúng tôi để được hỗ trợ nhanh nhất.</p>
<p>Email: <a href = "mailto: contact@jobvieclam.com">contact@	.com</a></p>
<p>Điện thoại: 028 71000 555</p>

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
            color: #981B1E;
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
        .text-pri{
          color: #981B1E !important;
        }
    </style>
</head>
<body>
  


<div class="content">
             <p>Yêu cầu cấp lại mật khẩu cho tài khoản ứng viên tại Jobvieclam.com</p>
            <p>Chào bạn <strong>{{$fullName}} </strong>,</p>
            <p >
              Để hoàn tất yêu cầu thay đổi mật khẩu, vui lòng nhấn vào liên kết dưới đây:
            </p>
            <a href="http://jobvieclam.com/member/forgotpassword?code={{$codeGen}}" target="_blank" rel="noopener noreferrer">http://jobvieclam.com/member/forgotpassword?code={{$codeGen}}</a>
            
            </br>
            <p>(Lưu ý link chỉ có hiệu lực trong vòng 60 phút)</p>
            <p>Mọi thắc mắc vui lòng liên hệ bộ phận hỗ trợ:</p>
         
            <div>
              <span>Email hỗ trợ: </span> <a href="mailto:support@jobvieclam.com">Support@jobvieclam.com</a>
            </div>
            <div>
              <span>Điện thoại: </span> <a href="tel:+028 71000 5550">028 71000 555</a>
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