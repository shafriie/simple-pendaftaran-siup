<?php include('akses.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <title>Sistem Informasi Pendaftaran SIUP</title>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <link href="Styles/MasterStyle.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body
{
    margin: 0px;
    padding: 0px;
    text-align: center;
    background: White;
}

#wrapper
{
    width: 100%;
    height: auto;
    text-align:left;
    margin: 0 auto;
    /*background: #FFBA31;*/
    background: #FFBA31;
}

#container
{
    width: 100%;
    height: auto;
    margin: 0 auto;
    background: 
    
}

#header {
    background: #ff6600 repeat scroll 0 0 white;
    border: 0px solid Red;
    height: 70px;
    margin-bottom: 20px;
    padding: 0 0 0px;
    width: 100%;
}

#titleInfo {
    border-bottom: 0px solid #FCDA55;
    color: #2377D1;
    float: right;
    font: bold 18pt Arial;
    height: 35px;
    margin: 10px 0 0 10px;
    overflow: hidden;
    padding: 10px 0 0;
    width: 55%;
}

#signOut
{
    font:bold 9pt Arial;
    float:right;
    border-bottom:none;
    padding: 0px 10px 0 0;
    margin: 0px 0px 30px 0;
    display:inline;
}



#logo {
    border: 0px solid orange;
    float: left;
    height: 32px;
    margin: 0 0 0 20px;
    padding: 10px 0 30px;
    width: 15%;
}

#centralContainer
{
    width: 100%;
    height:auto;
    margin: 0 auto;
    background: white;
}


/*Elements within centralContainer*/
#leftNavContainer {
    background: none repeat scroll 0 0 #222d32;
    border: 0 px solid Blue;
    float: left;
    height: 700px;
    margin: 0 0 0 0px;
    width: 20%;
}

#subContainerForLeftNav
{
   width: 190px; 
   height: auto;
   /*border:1px solid green;*/
   
}

#mainContainer {
    background: #CCC repeat scroll 0 0 Gray;
    border: 1px solid White;
    height: 700px;
    margin: 0 0 0 219px;
    width: 76%;
}

   


.menuText
{
    font:bold 13pt Arial;
    line-height:15pt;
    color:#00A6B5;
}

.menuTextHeading
{
    height:20px;
    border-bottom:0px solid #fcda55;
    padding:10px 0 10px 0;
    margin:0 0 10px 0;
}

.buttonAlign
{
    height:auto;
    width:auto;
    float: right;
    padding:0 0 0 0;
    margin:0 0 0 0;
}


.backgroundButton
{    
    width:170px;
    height:86px;
    display: block;
    margin: px 0px 0px 0px;
    background-image:url('../Images/ButtonBackground.bmp');
}

.buttonText
{

    font:bold 10pt Arial;
    line-height:18pt;
    color:#ffffff;
    padding:40px 15px 0 15px;
    margin:0 0 0 0;
    text-align:left;

}

.clear
{
    clear: both;
}
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
</style>

</head>

<body>
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <div id="wrapper">
      
<div id="header">
                <div id="logo">
                    <img src="loadm.png" />
                </div>
                <div id="titleInfo">
                   
                    <div id="signOut">
                        <a id="logOnStatus" class="signOut" > <a href="../logout">
                            Logout</a>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div id="centralContainer">
              <div id="leftNavContainer">
                <div id="subContainerForLeftNav">
                        <div id="adminDiv">
                            <div class="backgroundButton" id="adminButton"><br />
                            <img src="adm.png" /><font color="#FFFFFF" > Admin</font>
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                        <div id="vendorDiv">
                            <div class="menuTextHeading">
                                <a class="menuText"></a>
                            </div>
                            <div class="buttonAlign">
                                <div class="backgroundButton"><p class="buttonText">  <a href="index.php"><img src="home.png" /></a> Dashbord</p>
                                </div>
                                <div class="backgroundButton" id="vendorsButton">
                                    <p class="buttonText"> <a href="perizinan.html"><img src="ml.png" /></a> Pemohon Teknis</p>
                                </div>
                                 <div class="backgroundButton"  id="vendorsButton">
                                    <p class="buttonText"> Document</p>
                                </div>
                            </div>
                        </div>
                  <div class="clear">
                      </div>
                </div>
              </div>
                <div id="mainContainer">
                    <div id="transactionContentHolder" class="transactionContentHolder">
                    <p></p>
                    <p><font size="+2" face="Arial, Helvetica, sans-serif"> <b>  DASHBORD | PTSP DKI </b></font></p>
                    <hr />
                    <p></p>
                       
                    <p><a href="perizinan.html"> <img src="dasbot.jpg" /></a>
                    
                    </div>
                </div>
                <div class="clear">
                </div>
          </div>
</div>
    </div>
</body>
</html>

</body>
</html>
