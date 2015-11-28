
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <style type="text/css">
    .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 18cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 150px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(https://s3-eu-west-1.amazonaws.com/htmlpdfapi.production/free_html5_invoice_templates/example1/dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}</style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="http://www.gsmcmemoria.in/images/memoria.png">
      </div>
      <h1>INVOICE</h1>
      <div id="company" class="clearfix">
        <div>Seth GS Medical College Gymkhana</div>
        <div>Acharya Donde Marg,<br /> Parel, Mumbai, MH- 400012 </div>
        <div>INDIA</div>
        <div><a href="mailto:aavishkaarfest@gmail.com">aavishkaarfest@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>ID</span> {{$id}}</div>
        <div><span>NAME</span> {{$name}}</div>
        <div><span>ADDRESS</span> {{$h_address}}
          <br><span></span>{{$h_state}} , {{$h_zip}}
          <br><span></span>{{$h_country}}
        </div>
        <div><span>EMAIL</span> <a href="mailto:{{$email}}">{{$email}}</a></div>
        <div><span>DATE</span> August 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PRODUCT</th>
            <th class="description"></th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Passes</td>
            <td class="description"></td>
            <td class="unit">Rs {{$amount/100 - $donation}}</td>
            <td class="qty">1</td>
            <td class="total">Rs {{$amount/100 - $donation}}</td>
          </tr>
          <tr>
            <td class="service">Donation</td>
            <td class="description"></td>
            <td class="unit">Rs {{$donation}}</td>
            <td class="qty"></td>
            <td class="total">Rs {{$donation}}</td>
          </tr>
         
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rs {{$amount/100}}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>Thank you for your payment!<br>
You shall receive your invitation card by the first week of January. 
</div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>