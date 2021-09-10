/* @pjs globalKeyEvents=true; 
 */

// array de objetos
// Ball myBall;
int cantidad = 15;
float checkdist;
color c = color(0, 0, 160, 1.0);
int m_size = 4;

int Y_AXIS = 1;
int X_AXIS = 2;
color b1, b2, c1, c2;


int my_frames = 0;
int my_frames_holder = 0;

PVector force = new PVector(0.0,0.0);

// Ball [] myBalls = new Ball[cantidad];
ArrayList<Ball> myBalls = new ArrayList<Ball>();

ArrayList<PVector> myInts_cont;
PVector[] myInts_array;

// IntList myints = new IntList();
float[][] myints;

int my_trigger_counter = 0;
boolean  allowchange = false;

void setup() {

	 size(1800, 980);
	// size(1800, 980);
	// size(displayWidth-(displayWidth * 10)/100,displayHeight-(displayHeight * 10)/100, OPENGL);
	// size(displayWidth, displayHeight, OPENGL);
	background(0,0);

	// mklink /H C:\xampp\htdocs\bootstrap\web_page_line.pde E:\MEGA\processing\web_page_line\web_page_line.pde
	// mklink /H C:\xampp\htdocs\bootstrap\web_page.pde E:\MEGA\processing\web_page_line\web_page.pde

	int widthdiv = width/cantidad;
	int heightdiv = height/cantidad;
	int xnum = 0;
	int ynum = 0;

		if(ynum < height){

			for(int i=0; i< cantidad; i++){    
		
				if(xnum < width){
					for (int j = 0; j < cantidad; ++j) {

						String set_id = myBalls.size()+"_"+i+"_"+j;

						myBalls.add(new Ball(random(10, width),random(10, height),set_id));

						xnum = xnum + widthdiv;
					}
				xnum=0;
				ynum = ynum + heightdiv;
			
				}
		
			}
		}
		// frameRate(2);

}

		
void draw() {
 
	// force = new PVector(0.0,0.0);

		background(0,0);
		londoncall();

		textSize(260);
		textAlign(RIGHT);
		textLeading(260);
		String sw = "\n\n DESIGNER";
		fill(203, 134, 26, 100);
		// text(sw, 100, 100, 1700, 980);  // Text wraps within text box
			

		textSize(250);
		textAlign(RIGHT);
		textLeading(260);
		String s = "PSYCHEDELIC DOG DESIGNER";
		fill(50);
		// text(s, 100, 100, 1700, 980);  // Text wraps within text box

		// println(my_trigger_counter);
		 if (my_trigger_counter > 400) {
			pushMatrix();
			fill(255);
			ellipse( 10-width,10-height,5,5);
			popMatrix();
			allowchange = true;
			my_trigger_counter = 0;
			reset_dots();
		}else  if (my_trigger_counter > 200 ) {
			allowchange = true;
			my_trigger_counter++;
		}else{
			allowchange = false;
			my_trigger_counter++;
		}



		if (mousePressed == true) {
				reset_dots();
			}

}






void draw_line_sub(float prev_x,float prev_y,float now_x,float now_y){
		c = color(106, 92, 15, 1.0);
		m_size=ceil(random(7, 10));
		line(prev_x,prev_y,now_x,now_y);
}

void draw_line(float prev_x,float prev_y,float now_x,float now_y){
		c = color(162,126,94,180);
		m_size=ceil(random(5, 10));
		line(prev_x,prev_y,now_x,now_y);					
}

void draw_line2(float prev_x,float prev_y,float now_x,float now_y){
		strokeWeight(1);
		c = color(77,35,03,155);
		m_size= ceil(random(2, 4));
		line(prev_x,prev_y,now_x,now_y);					
}

void draw_line3(float prev_x,float prev_y,float now_x,float now_y){
		strokeWeight(1);		
		c = color(155, 85,25,170);
		m_size= ceil(random(2, 4));
		line(prev_x,prev_y,now_x,now_y);					
}

	


void setGradient(int x, int y, float w, float h, color c1, color c2, int axis ) {

  noFill();

  if (axis == Y_AXIS) {  // Top to bottom gradient
    for (int i = y; i <= y+h; i++) {
      float inter = map(i, y, y+h, 0, 1);
      color c = lerpColor(c1, c2, inter);
      stroke(c);
      line(x, i, x+w, i);
    }
  }  
  else if (axis == X_AXIS) {  // Left to right gradient
    for (int i = x; i <= x+w; i++) {
      float inter = map(i, x, x+w, 0, 1);
      color c = lerpColor(c1, c2, inter);
      stroke(c);
      line(i, y, i, y+h);
    }
  }
}

 


void londoncall(){

	for (int i = 0; i < myBalls.size(); ++i) {	
	
		color c2 = color(1,231,253,50);
		stroke(1,231,253,30); 

		myBalls.get(i).update(c2,m_size);
		fill(1,231,253,50);
	 
		myInts_cont = new ArrayList<PVector>();
				
		for (int q = 0; q < myBalls.size(); ++q){
					
				// myInts_array =  new IntList();
				
				checkdist = dist(myBalls.get(i).loc.x, myBalls.get(i).loc.y, myBalls.get(q).loc.x, myBalls.get(q).loc.y);
				
				 if (checkdist < 60) {
						// myInts_array.append(floor(myBalls.get(q).loc.x));
						// myInts_array.append(floor(myBalls.get(q).loc.y));
						
						PVector pv = new PVector(floor(myBalls.get(q).loc.x), floor(myBalls.get(q).loc.y));
						
						myInts_cont.add(pv);

				}else if (checkdist < 100) {
					draw_line2(myBalls.get(i).loc.x, myBalls.get(i).loc.y, myBalls.get(q).loc.x, myBalls.get(q).loc.y);
				}else	if (checkdist < 190) {
					// draw_line(myBalls.get(i).loc.x, myBalls.get(i).loc.y, myBalls.get(q).loc.x, myBalls.get(q).loc.y);
				}else	if (checkdist < 220) {
					// draw_line_sub(myBalls.get(i).loc.x, myBalls.get(i).loc.y, myBalls.get(q).loc.x, myBalls.get(q).loc.y);
				}
				
		
			}  

			if (myInts_cont.size() > 2) {
					beginShape();
				for (int y = 0; y < myInts_cont.size(); ++y) {

					vertex(myInts_cont.get(y).x,myInts_cont.get(y).y);		

				}
					endShape(CLOSE);
			}

		}

}





void reset_dots(){
	if (allowchange == true) {
		for (int j = 0; j < myBalls.size(); ++j) {	
				myBalls.get(j).loc.x= random(10, width) ;				
				myBalls.get(j).loc.y= random(10, height);				
			}
		allowchange = false;
 		my_trigger_counter = 0;
	} 

}
class Ball {

	float setx;
	float sety;
	String myid;
	PVector acc;
	PVector vel;
	PVector loc;
	float n= 0.0;
	float blu;
float ble;

float g=0;
	Ball (float setx_f,float sety_f, String  id) {
		setx = setx_f;
		sety = sety_f;
		myid = id;
		vel = new PVector(0.0,0.0);
		loc = new PVector(setx,sety);
		acc = new PVector(0.0,0.0);
		loc.x=setx;
		loc.y=sety;
		// ellipseMode(CORNER);
		
		ellipse(loc.x, loc.y, 10, 10);    
	}


	
	void change(float setx_f,float sety_f) {
		loc.x=setx;
		loc.y=sety;
	}

	
	void update(color b, int m_size) {
		// vel.add(acc);
		// vel.limit(50);
		// loc.add(vel);
		// acc.mult(0);
		fill(b);
			n = n + 0.01;
 
		if (g >= 360) {
			g = 0;  
		}else{
			 g= g + 0.05;  
		}

			float mx = noise(random(n-15, n+10));
			float my = noise(random(n-10, n+18));

		  blu= map(mx, 0, 1, loc.x-4, loc.x+4); 
    	  ble= map(my, 0, 1, loc.y-4, loc.y+4);    
			pushMatrix();
				// translate(blu, ble);
				// rotate(g);		
				ellipse(10,10, m_size, m_size);
			popMatrix();
			
			pushMatrix();
				fill(0);
				ellipse(loc.x, loc.y, 4, 4);    
			popMatrix();

			int limit = 380;
			if (blu > (setx+limit)) {
				blu = setx+limit;
			} else if (blu < (setx-limit)) {
				blu = setx-limit;
			}

			if (ble > (sety+limit)) {
				ble = sety+limit;
			}else if (ble < (sety-limit)) {
				ble = sety-limit;
			}

			loc.x = blu;
			loc.y = ble;

 

	}

	void applyForce(PVector force) {
		// acc = force;
		// acc.add(force);
	}

	void edges() {

		if (loc.x > width-10) {
			vel.x *= -1;
			loc.x = width-10;
		} else if (loc.x < 10) {
			vel.x *= 1;
			loc.x = 10;
		}

		if (loc.y<10){
			loc.y=10;					
			vel.y *= 1;					
		}else if(loc.y > height-10){
			loc.y=height-10;					
			vel.y *= -1;					
		}

	}



}  


