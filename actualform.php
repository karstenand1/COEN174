<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <title>Judge Evaluation Form</title>
  <meta name="description" content="Judge Eval Form page 1">
  <meta name="author" content="Group 1">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="formstyle.css">

  </head>

  <body>
    <div id="topbar">
      <h1>Complete Evaluation </h1>
    </div>
    <div style="margin-right: auto; margin-left:auto; width:initial;">
      <table  style="float:center" class=" nobordertable displaydata">
        <tr>
          <td class=" leftcol ">Judge ID: </td>
          <td class="  old" id= "jID"><?php echo $_POST['jID']; ?> </td>

          <td class="leftcol ">Session:</td>
          <td class=" old" id="session"><?php echo $_POST['session']; ?></td>

          <td class="leftcol">Project Name:</td>
          <td class="rightcol" id="project"> <?php echo $_POST['project']; ?></td>

          <td class="leftcol">Team Members:</td>
          <td class="rightcol" id="members" style="max-width: 150px; "></td>
        </tr>
        <tr>
          <td class="leftcol ">Judge Name:</td>
          <td class=" old" id="jName"><?php echo $_POST['judgeName']; ?></td>

          <td class="leftcol ">Room:</td>
          <td class=" old" id="room"><?php echo $_POST['room']; ?></td>

          <td class="leftcol">Advisor:</td>
          <td class="rightcol" id="advisor"></td>
          <td></td><td></td>
        </tr>
      </table>

    </div>
    <div class="clearfix"></div>

    <div class="formleft">
      <p class="bold"> 1) Please evaluate the senior engineering design projects and presentations using the given point system: 
      </p>

      <table class="condense">

        <tr> 
          <td class="leftcol"> 5</td> <td class="rightcol"> Excellent </td><td>at the level of an entry-level engineer you would hire </td>
        </tr>
        <tr> 
         <td class="leftcol">4</td> <td class="rightcol"> Good </td><td>at the level of an accomplished college senior</td>
       </tr>
       <tr> 
        <td class="leftcol"> 3 </td><td class="rightcol"> Average </td><td>at the level typical of a college student</td>
      </tr>
      <tr>
       <td class="leftcol"> 2 </td><td class="rightcol"> Below Average </td><td>not up to the expectations of a college student</td>
     </tr>
     <tr> 
      <td class="leftcol"> 1</td><td class="rightcol">  Poor </td><td>significant errors or omission</td>
    </tr>
    <tr> 
      <td class="leftcol"> N/A </td><td class="rightcol"> </td><td> if no appropriate score applies</td>
    </tr>
  </table>
  <table id="scroller" class="condense rightfollow">

    <tr> 
      <td class="leftcol"> 5</td> <td class="rightcol"> Excellent </td>
    </tr>
    <tr> 
     <td class="leftcol">4</td> <td class="rightcol"> Good </td>
   </tr>
   <tr> 
    <td class="leftcol"> 3 </td><td class="rightcol"> Average </td>
  </tr>
  <tr>
   <td class="leftcol"> 2 </td><td class="rightcol"> Below Average </td>
 </tr>
 <tr> 
  <td class="leftcol"> 1</td><td class="rightcol">  Poor </td>
</tr>
<tr> 
  <td class="leftcol"> N/A </td><td class="rightcol"> None Appropriate</td>
</tr>
</table>
<br/>
 <!--  <table id="scroller" class="condense rightfollow">

        <tr> 
          <td class="leftcol"> 5</td> <td class="rightcol"> Excellent </td><td>at the level of an entry-level engineer you would hire </td>
        </tr>
        <tr> 
         <td class="leftcol">4</td> <td class="rightcol"> Good </td><td>at the level of an accomplished college senior</td>
       </tr>
       <tr> 
        <td class="leftcol"> 3 </td><td class="rightcol"> Average </td><td>at the level typical of a college student</td>
      </tr>
      <tr>
       <td class="leftcol"> 2 </td><td class="rightcol"> Below Average </td><td>not up to the expectations of a college student</td>
     </tr>
     <tr> 
      <td class="leftcol"> 1</td><td class="rightcol">  Poor </td><td>significant errors or omission</td>
    </tr>
    <tr> 
      <td class="leftcol"> N/A </td><td class="rightcol"> </td><td> if no appropriate score applies</td>
    </tr>
  </table> -->

  <form action="confirmform.php" method="post">
    <table class="stripe formtable">
      <tr>
        <th style="width:315px;"> <h2>Design Project</h2></th>
        <th style="text-align:center;">0</th>
        <th style="text-align:center;">1</th>
        <th  style="text-align:center;">2</th>
        <th style="text-align:center;">3</th>
        <th style="text-align:center;">4</th>
        <th style="text-align:center;">5</th>
      </tr>
      <tr>
        <td>Technical Accuracy</td>
        <td class="radiobutton"><input type="radio" required name="DP1" value="0"></td>       
        <td class="radiobutton"><input type="radio" required name="DP1" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP1" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP1" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP1" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP1" value="5"></td>
      </tr>
      <tr>
        <td>Creativity and Innovation</td>
        <td class="radiobutton"> <input type="radio" required name="DP2" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP2" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP2" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP2" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP2" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP2" value="5"></td>

      </tr>
      <tr>
        <td>Supporting Analytical Work</td>
        <td class="radiobutton"> <input type="radio" required name="DP3" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP3" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP3" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP3" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP3" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP3" value="5"></td>

      </tr>
      <tr>
        <td>Methodical Design Process Demonstrated</td>
        <td class="radiobutton"> <input type="radio" required name="DP4" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP4" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP4" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP4" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP4" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP4" value="5"></td>

      </tr>
      <tr>
        <td>Addresses Project Complexity Appropriately</td>
        <td class="radiobutton"> <input type="radio" required name="DP5" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP5" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP5" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP5" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP5" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP5" value="5"></td>

      </tr>
      <tr>
        <td>Expectation of Completion</td>
        <td class="radiobutton"> <input type="radio" required name="DP6" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP6" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP6" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP6" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP6" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP6" value="5"></td>

      </tr>
      <tr>
        <td>Design and Analysis of Tests</td>
        <td class="radiobutton"> <input type="radio" required name="DP7" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP7" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP7" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP7" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP7" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP7" value="5"></td>

      </tr>
      <tr>
        <td>Quality of Response during Q&A</td>
        <td class="radiobutton"> <input type="radio" required name="DP8" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="DP8" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="DP8" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="DP8" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="DP8" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="DP8" value="5"></td>

      </tr>
    </table>

    <div class="clearfix"></div>
    <br/>

    <table class="stripe formtable">
      <tr>
        <th style="width:315px;">    <h2>Presentation</h2></th>        
        <th style="text-align:center;">0</th>
        <th style="text-align:center;">1</th>
        <th style="text-align:center;">2</th>
        <th style="text-align:center;">3</th>
        <th style="text-align:center;">4</th>
        <th style="text-align:center;">5</th>
      </tr>
      <tr>
        <td>Organization</td>
        <td class="radiobutton"><input type="radio" required name="P1" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="P1" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="P1" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="P1" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="P1" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="P1" value="5"></td>

      </tr>
      <tr>
        <td>Use of Allotted Time</td>
        <td class="radiobutton"><input type="radio" required name="P2" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="P2" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="P2" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="P2" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="P2" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="P2" value="5"></td>

      </tr>
      <tr>
        <td>Visual Aids</td>
        <td class="radiobutton"><input type="radio" required name="P3" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="P3" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="P3" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="P3" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="P3" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="P3" value="5"></td>

      </tr>
      <tr>
        <td>Confidence and Poise</td>
        <td class="radiobutton"><input type="radio" required name="P4" value="0"></td>
        <td class="radiobutton"><input type="radio" required name="P4" value="1"> </td>
        <td class="radiobutton"><input type="radio" required name="P4" value="2"></td>
        <td class="radiobutton"><input type="radio" required name="P4" value="3"></td>
        <td class="radiobutton"><input type="radio" required name="P4" value="4"></td>
        <td class="radiobutton"><input type="radio" required name="P4" value="5"></td>

      </tr>
    </table>
    <div class="clearfix"></div>
    <br/>

    <h2>Total Points: </h2>
    <p class="bold instruction">
      2) Please select each of the following considerations that were addressed by the presentation:
    </p>
    <table>
      <tr>
        <td><input type="checkbox"  name="C1" value="1">Economic</td>
        <td><input type="checkbox"  name="C2" value="1">Sustainability</td>
      </tr>
      <tr>
        <td><input type="checkbox"  name="C3" value="1">Ethical</td>
        <td><input type="checkbox"  name="C4" value="1">Social</td>
      </tr>
      <tr>
        <td><input type="checkbox"  name="C5" value="1">Environmental</td>
        <td><input type="checkbox"  name="C6" value="1">Manufacturability</td>
      </tr>
      <tr>
        <td><input type="checkbox"  name="C7" value="1">Health and Safety</td>
        <td><input type="checkbox"  name="C8" value="1">Political</td>
      </tr>
    </table>



    <p class="bold instruction">
     3) Additional Comments  (Limit 255 chars):
   </p>

   <div style="text-align:center;">

     <textarea rows="4" cols="100" maxlength="255" name="comments"></textarea>

     <br/>
     <!-- <button > Save </button> -->
     <input type="hidden" id= "jIDhidden" name="judgeId" >
     <input type="hidden" id="jNamehidden" name="judgeName" >
     <input type="hidden" id= "sessionhidden" name="session" >
     <input type="hidden" id="roomhidden" name="room" >
     <input type="hidden" id="projecthidden" name="project" >
     <input type="hidden" id="teamhidden" name="team" >
     <input type="hidden" id="advisorhidden" name="advisor" >
     <input type="hidden" id="PID" name="PID" >
     <input type="submit" value="Continue">
   </div>
 </form>
</div>

<div class="footer">
</div>
    <script src="geturl.js"></script>

    <script>

     var jID = document.getElementById('jID').innerHTML.replace(/\s/g,'');
     console.log(jID)
     var jName =document.getElementById('jName').innerHTML;
     var session = document.getElementById('session').innerHTML;
     var room = document.getElementById('room').innerHTML;


     projectRaw=document.getElementById('project').innerHTML;

     console.log(projectRaw);


     projectRaw= noplus(projectRaw);


     projlist=projectRaw.split("-");
     console.log(projlist);

     project=projlist[0];
     document.getElementById('project').innerHTML=project;

     PID=$.trim(projlist[1]);

 // document.getElementById('jID').innerHTML= jID;
 // document.getElementById('jName').innerHTML= jName;
 // document.getElementById('project').innerHTML= project;
 // document.getElementById('session').innerHTML= session;
 // document.getElementById('room').innerHTML= room;

 document.getElementById('jIDhidden').value= jID;
 document.getElementById('jNamehidden').value= jName;
 document.getElementById('sessionhidden').value= session;
 document.getElementById('roomhidden').value= room;
 document.getElementById('projecthidden').value= project;


 document.getElementById('PID').value= PID;


 $.ajax({
  type:'GET',
  url:'getStudents.php',
  data:{PID: PID},
  dataType:'json',
  success: function(response){
    console.log(response);
    line="";
    $.each(response, function(index, element) {
      line+=element.student + ", ";
    })
    line=line.substring(0,line.length-2)
    document.getElementById('members').innerHTML= line;
    document.getElementById('advisor').innerHTML=response[0].advisor;

    document.getElementById('teamhidden').value= line;
    document.getElementById('advisorhidden').value= response[0].advisor;
    
  }
});

    // NEED TO SUBMIT PID OVER TO NEXT PAGE

    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 600 ) {
       $('#scroller').fadeOut(200);
     }
     else {
       $('#scroller').fadeIn(200);
     }
   });

 </script>

</body>
</html>