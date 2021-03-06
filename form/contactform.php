<!--
// URL: www.freecontactform.com
// Version: FreeContactForm Free V1.3
// Copyright (c) 2011 Stuart Cochrane <stuartc1@gmail.com>
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Contact Us</title>
	<script src="free_validation.js"></script>
	<script>
	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','EMAIL','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message')
	</script>
	<link rel="stylesheet" type="text/css" href="free_styles.css">
	</head>
	<body>
	
	<form name="contactformfree" method="post" action="form-2/free_process.php" onsubmit="return validateForm();">
	<table width="590px" class="cffree">
	<tr>
	 <td valign="top" class="cffree_td">
	  <label for="Full_Name" class="required"><strong>name</strong><span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" class="cffree_td">
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="80" style="width:510px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" class="cffree_td">
	  <label for="Email_Address" class="required"><strong>email</strong><span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" class="cffree_td">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:510px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" class="cffree_td">
	  <label for="Telephone_Number" class="not-required"><strong>phone</strong></label>
	 </td>
	 <td valign="top" class="cffree_td">
	  <input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100" style="width:510px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" class="cffree_td">
	  <label for="Your_Message" class="required"><strong>enquiry</strong><span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" class="cffree_td">
	  <textarea style="width:510px;height:120px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
	
	<tr>
	 <td valign="top" class="cffree_td" width="80">
	 	 <input type="submit" value="Submit" />
	 </td>
	 <td valign="top" class="cffree_td" width="510">
	 </td>
	</tr>
	</table>
	</form>
</body>
</html>