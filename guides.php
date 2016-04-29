<?php include 'header.php';
session_start();
?>
<body>
<div class="background-container" >
<div class="container main-container">


<h3 style="text-align:center"><?php echo guidestitle;?></h3>

<div class="guides-container">

<div style="padding:10px;"><h3>Ejemplos de c&oacute;digo de Arduino para el Manabot</h3></div>

<div id="ejemplo1">
<h4>Blink</h4>
	<div id="blink-content">
	<p>Con &eacute;ste ejemplo podras encender y apagar un LED utilizando tu kit de Manabot, el Manabot tiene conectado al pin 13 un LED en la tarjeta controladora</p>
	<a target="_blank" href="http://www.arduino.cc/en/Tutorial/Blink">Ejemplo oficial de Arduino</a><br><br>
	<code style="color:black;background:none">
	//Asignar 13 a una variable tipo entero<br>
	int ledPin = 13;<br><br>
	//El 'setup' se ejecuta una vez cada reset o encendido del Arduino<br>
	void setup() {  <br> 
	//Asignar el pin 13 como salida digital <br>               
  	pinMode(ledPin, OUTPUT);    <br> 
	}<br><br>
	//Ciclo que se repite indefinidamente<br>
	void loop() {<br>
  		digitalWrite(ledPin, HIGH);  //Escribir un nivel alto en el pin 13<br>
  		delay(1000);   //Esperar 1000 milisegundos (1 Segundo) <br>
  		digitalWrite(ledPin, LOW);   //Escribir un nivel bajo en el pin 13<br>
  		delay(1000); // Esperar 1000 milisegundos (1 segundo)<br>
}

	</code>
	</div>
</div>

<div id="ejemplo1">
<h4>Probar motorreductores</h4>
	<div id="blink-content">
	<p>Con &eacute;ste ejemplo podr&aacute;s verificar que los motorreductores est&eacute;n conectados y funcionen correctamente.</p>
	<code style="color:black;background:none">
int motorA = 4;<br>
int motorB = 9;<br>
int enable = 5;<br><br>
void setup(){<br>
	pinMode(motorA,OUTPUT);<br>
	pinMode(motorB,OUTPUT);<br>
	pinMode(enable,OUTPUT);<br>
	digitalWrite(enable,HIGH);<br>
}<br><br>
void loop(){<br>
	digitalWrite(motorA,HIGH);<br>
	digitalWrite(motorB,LOW);<br>
	delay(1000);<br>
	digitalWrite(motorA,LOW);<br>
	digitalWrite(motorB,HIGH);<br>
	delay(1000);<br>
}<br>

	</code>
	</div>
</div>

<div id="ejemplo1"><h4>PWM en Motorreductores</h4>
	<div id="blink-content">
	<p></p>
	<code style="color:black;background:none">
int motorA = 4;<br>
int motorB = 9;<br>
int enable = 5;<br><br>
void setup(){<br>
	pinMode(ledPin, OUTPUT);<br>
      pinMode(motorA,OUTPUT);<br>
      pinMode(motorB,OUTPUT);<br>
      pinMode(enable,OUTPUT);<br>
      digitalWrite(motorA,HIGH);<br>
      digitalWrite(motorB,LOW);<br>
}<br><br>

void loop(){<br>
  for(int i=50;i<255;i++){<br>
	analogWrite(enable, i);<br>
delay(5);<br>
  }<br>
  for(int j=255;j>50;j--){<br>
	analogWrite(enable, j); <br>
delay(5);<br>
  }<br>
}
<br><br>
	</code>
	</div>
</div>

<div id="ejemplo1">
<h4>Controlando un servomotor</h4>
	<div id="blink-content">
	<p>Con &eacute;ste ejemplo podras encender y apagar un LED utilizando tu kit de Manabot, el Manabot tiene conectado al pin 13 un LED en la tarjeta controladora</p>
	<code style="color:black;background:none">
	int led = 13;<br><br>
	void setup() {<br>                
  	pinMode(led, OUTPUT);    <br> 
	}<br><br>

	void loop() {<br>
  		digitalWrite(led, HIGH);<br>
  		delay(1000); <br>
  		digitalWrite(led, LOW);<br>
  		delay(1000);<br>
}

	</code>
	</div>
</div>


<div id="ejemplo1">
<h4>Controlando el robot desde tu smartphone</h4>
	<div id="blink-content">
	<p>Con &eacute;ste ejemplo podras encender y apagar un LED utilizando tu kit de Manabot, el Manabot tiene conectado al pin 13 un LED en la tarjeta controladora</p>
	<code style="color:black;background:none">
 #include &lt;SoftwareSerial.h&gt;<br>
  #include &lt;Servo.h&gt;<br>
SoftwareSerial BTconex(7, 8);<br>
int ledpin=13; <br>
int BluetoothData;<br>
void reverse();<br>
void forward();<br>
void left();<br>
void right();<br>
void standing();<br><br>
 
Servo myservo;  <br>
                <br>
int pos = 0;    <br>

//motors port config<br>

int motor1a=4;<br>
int motor1b=9;<br>
int motor2a=10;<br>
int motor2b=12;<br>
int enable1=5;<br>
int enable2=6;<br>

void setup() {<br>
    BTconex.begin(9600);<br>
  pinMode(ledpin, OUTPUT);<br> 
  pinMode(motor1a, OUTPUT);<br>
  pinMode(motor1b, OUTPUT);<br>
  pinMode(motor2a, OUTPUT);<br>
  pinMode(motor2b, OUTPUT);<br>
  pinMode(enable1, OUTPUT);<br>
  pinMode(enable2, OUTPUT);<br>
  digitalWrite(enable1, HIGH);<br>
  digitalWrite(enable2, HIGH);<br>
  myservo.attach(11);<br>
}<br>

void loop() {<br>
    if (BTconex.available())<br>
    {<br>
      BluetoothData=BTconex.read();<br>
   if (BluetoothData == 'S')<br>
  {<br>
    //atras<br>
    reverse();<br>
  } else if(BluetoothData == 'W'){<br>
  forward();<br>
  } else if(BluetoothData == 'A'){<br>
  left();<br>
  } else if(BluetoothData == 'D'){<br>
 right();<br>
  } else if(BluetoothData == 'H'){<br>
    myservo.write(60);<br>
  }<br>
  else if (BluetoothData == 'Q'){<br>
    standing();<br>
    myservo.write(120);<br>
  }<br>
 }<br>
delay(3);  <br>
}<br>
void reverse()<br>
{<br>
    digitalWrite(motor2a, HIGH);<br>
    digitalWrite(motor2b, LOW);<br>
    digitalWrite(motor1a, HIGH);<br>
    digitalWrite(motor1b, LOW);<br>
}<br><br>
void forward()<br>
{<br>
    digitalWrite(motor2a, LOW);<br>
    digitalWrite(motor2b, HIGH);<br>
    digitalWrite(motor1a, LOW);<br>
    digitalWrite(motor1b, HIGH);<br>
}<br>
<br>
void left()<br> 
{<br>
    digitalWrite(motor2a, HIGH);<br>
    digitalWrite(motor2b, LOW);<br>
    digitalWrite(motor1a, LOW);<br>
    digitalWrite(motor1b, HIGH);<br>
}<br>
void right()<br> 
{<br>
     digitalWrite(motor2a, LOW);<br>
    digitalWrite(motor2b, HIGH);<br>
    digitalWrite(motor1a, HIGH);<br>
    digitalWrite(motor1b, LOW);<br>
}<br>
void standing()<br>
{<br>
   digitalWrite(motor1a,LOW);<br>
   digitalWrite(motor1b,LOW);<br>
   digitalWrite(motor2a,LOW);<br>
   digitalWrite(motor2b,LOW);<br>
}<br>


	</code>
	</div>
</div>

</div>


<!-- Closing main-container -->
</div>
<!-- closing background-container-->
</div>

<script>


function showblink(){
	var blinkcontent = document.getElementById('blink-content');
	if(blinkcontent.style.display == 'none'){
	document.getElementById('blink-content').style.display = 'block';
	}
	else{
	document.getElementById('blink-content').style.display = 'none';
}

}

</script>

<?php include 'footer.php'; ?>
</body>