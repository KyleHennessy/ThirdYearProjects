//KYLE HENNESSY
//C00227463



package calculator;

import javax.swing.JFrame;

import javax.swing.JOptionPane;
import javax.swing.JButton;
import java.awt.Font;
import javax.swing.JTextField;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Color;
import javax.swing.SwingConstants;

public class CalculatorWindow extends CalculatorFunctions{

	
	JFrame frmCalculator;
	private JTextField screen;
	private JTextField history;
	private JButton button9; 			//button 9
	private JButton button8;			//button 8
	private	JButton button7;			//button 7
	private JButton button6; 			//button 6
	private JButton button5; 			//button 5
	private JButton button4; 			//button 4
	private JButton button3; 			//button 3
	private JButton button2;			//button 2
	private JButton button1; 			//1 button
	private JButton button0; 			//0 button
	private JButton buttondecimal; 		//decimal button
	private JButton buttonequals; 		//equals button
	private JButton buttonmultiply;	  	//multiplication button
	private JButton buttonplus;			//plus button
	private JButton buttondivision;		//division button
	private JButton buttonminus;		//button minus
	private JButton buttondelete;		//delete button
	private JButton buttonbinary;	    //binary button
	private JButton buttonhex;			//hexadecimal button
	private JButton buttonsquared;		//x^2 button
	private JButton buttoncubed;		//x^3 button
	private JButton memorystore;		//memory store button
	private JButton memoryrecall;		//memory recall button 
	private JButton memoryadd;			//memory add button	
	private JButton memorysubtract;				//memory subtract
	private JButton buttonclear;
	private String enterNumber;
	private String lastInput;

	//creates application
	

	public CalculatorWindow() {
		initialize();
	}

	//sets size and initializes frame
		//window frame
	
	private void initialize() {
		frmCalculator = new JFrame();
		frmCalculator.setTitle("Calculator");
		frmCalculator.getContentPane().setBackground(new Color(0, 0, 0));
		frmCalculator.setBounds(100, 100, 288, 559);
		frmCalculator.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frmCalculator.setVisible(true);
		frmCalculator.getContentPane().setLayout(null);
		
		//screen of calculator
		screen = new JTextField();
		screen.setEditable(false);
		screen.setFont(new Font("Tahoma", Font.PLAIN, 18));
		screen.setHorizontalAlignment(SwingConstants.RIGHT);
		screen.setBounds(10, 61, 252, 47);
		frmCalculator.getContentPane().add(screen);
		screen.setColumns(10);
		
		// history screen
		history = new JTextField();
		history.setEditable(false);
		history.setBackground(Color.LIGHT_GRAY);
		history.setBounds(10, 11, 252, 39);
		frmCalculator.getContentPane().add(history);
		history.setColumns(10);
// -------------------ROW 1 --------------------------		
		//7 button
		button7 = new JButton("7");
		button7.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				enterNumber = screen.getText() + button7.getText();			//adds the number 7 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
			
				
			}
		});
		button7.setForeground(new Color(0, 0, 0));
		button7.setBackground(new Color(173, 216, 230));
		button7.setFont(new Font("Arial Black", Font.BOLD, 20));
		button7.setBounds(10, 120, 50, 50);
		frmCalculator.getContentPane().add(button7);
		
		//8 button
		button8 = new JButton("8");
		button8.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button8.getText();			//adds the number 8 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button8.setForeground(new Color(0, 0, 0));
		button8.setBackground(new Color(173, 216, 230));
		button8.setFont(new Font("Arial Black", Font.BOLD, 20));
		button8.setBounds(75, 120, 50, 50);
		frmCalculator.getContentPane().add(button8);
		
		//9 button
		
		button9 = new JButton("9");
		button9.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button9.getText();			//adds the number 9 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button9.setBackground(new Color(173, 216, 230));
		button9.setFont(new Font("Arial Black", Font.BOLD, 20));
		button9.setBounds(140, 120, 50, 50);
		frmCalculator.getContentPane().add(button9);

//-------------------------------ROW 2---------------------------		
		
		//6 button
		button6 = new JButton("6");
		button6.setBackground(new Color(173, 216, 230));
		button6.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button6.getText();			//adds the number 6 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button6.setFont(new Font("Arial Black", Font.BOLD, 20));
		button6.setBounds(140, 181, 50, 50);
		frmCalculator.getContentPane().add(button6);
		
		//5 button
		
		button5 = new JButton("5");
		button5.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button5.getText();			//adds the number 5 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button5.setBackground(new Color(173, 216, 230));
		button5.setFont(new Font("Arial Black", Font.BOLD, 20));
		button5.setBounds(75, 181, 50, 50);
		frmCalculator.getContentPane().add(button5);
		
		//4 button
		
		button4 = new JButton("4");
		button4.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button4.getText();			//adds the number 4 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button4.setBackground(new Color(173, 216, 230));
		button4.setFont(new Font("Arial Black", Font.BOLD, 20));
		button4.setBounds(10, 181, 50, 50);
		frmCalculator.getContentPane().add(button4);
// ----------------------------------ROW 3------------------		
		//3 button
		button3 = new JButton("3");
		button3.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button3.getText();			//adds the number 3 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button3.setBackground(new Color(173, 216, 230));
		button3.setFont(new Font("Arial Black", Font.BOLD, 20));
		button3.setBounds(140, 242, 50, 50);
		frmCalculator.getContentPane().add(button3);
		
		//2 button
		
		button2 = new JButton("2");
		button2.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button2.getText();			//adds the number 2 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button2.setBackground(new Color(173, 216, 230));
		button2.setFont(new Font("Arial Black", Font.BOLD, 20));
		button2.setBounds(75, 242, 50, 50);
		frmCalculator.getContentPane().add(button2);
		
		//1 button
		
		button1 = new JButton("1");
		button1.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button1.getText();			//adds the number 1 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button1.setBackground(new Color(176, 224, 230));
		button1.setFont(new Font("Arial Black", Font.BOLD, 20));
		button1.setBounds(10, 242, 50, 50);
		frmCalculator.getContentPane().add(button1);
//-----------------------------ROW 4----------------------		
		//0 button
		
		button0 = new JButton("0");
		button0.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + button0.getText();			//adds the number 0 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		button0.setBackground(new Color(173, 216, 230));
		button0.setFont(new Font("Arial Black", Font.BOLD, 20));
		button0.setBounds(10, 303, 50, 50);
		frmCalculator.getContentPane().add(button0);
		
		// decimal button
		
		buttondecimal = new JButton(".");
		buttondecimal.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				
				String enterNumber = screen.getText() + buttondecimal.getText();			//adds the number 0 to what is already on the screen in the enternumber variable
				screen.setText(enterNumber);										//sets number displayed on the screen
				
			}
		});
		buttondecimal.setBackground(new Color(173, 216, 230));
		buttondecimal.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttondecimal.setBounds(75, 303, 50, 50);
		frmCalculator.getContentPane().add(buttondecimal);
		
		// equals button
		
		buttonequals = new JButton("=");
		buttonequals.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				//number on screen before equals is pressed is saved to array
				try {
					if (lastInput == "+") {
					answer += calculate(screen.getText());
					}
					else if (lastInput == "-") {
					answer -= calculate(screen.getText());
					}
					else if (lastInput == "/") {
					answer /= calculate(screen.getText());
					}
					else if (lastInput == "*") {
					answer *= calculate(screen.getText());
					}
					
				} catch (Exception e1) {
					e1.printStackTrace();
				}
				historyString += screen.getText() + "=";
				history.setText(historyString);
				screen.setText("");
				screen.setText(Double.toString(answer));
				answer = 0;
			}
			
		});
		
		buttonequals.setForeground(new Color(0, 0, 0));
		buttonequals.setBackground(new Color(144, 238, 144));
		buttonequals.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttonequals.setBounds(140, 303, 50, 50);
		frmCalculator.getContentPane().add(buttonequals);
// ---------------- SIDE COLUMN--------------------------		
		//multiplication button
		
		buttonmultiply = new JButton("x");
		buttonmultiply.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				historyString += screen.getText() + "x";			//adds the current number on screen and the multiplication symbol to history string
				history.setText(historyString);	
				try {
					answer = calculate(screen.getText());
					//answer = answer * Double.parseDouble(screen.getText());
					lastInput = "*";
				} catch (Exception e1) {
					e1.printStackTrace();
					JOptionPane.showMessageDialog(null, "Number Format Exception");   //pop up window if mutiply is first button pressed by user
					
				}
				screen.setText("");
			}
		});
		buttonmultiply.setBackground(new Color(169, 169, 169));
		buttonmultiply.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttonmultiply.setBounds(200, 166, 62, 37);
		frmCalculator.getContentPane().add(buttonmultiply);
		
		//division button
		
		buttondivision = new JButton("\u00F7");
		buttondivision.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				historyString += screen.getText() + "\u00F7";
				history.setText(historyString);
				try {
					answer = calculate(screen.getText());
					//answer = answer / Double.parseDouble(screen.getText());
					lastInput = "/";
				} catch (Exception e1) {
					e1.printStackTrace();
					JOptionPane.showMessageDialog(null, "Number Format Exception");
				}
				screen.setText("");
			}
		});
		buttondivision.setBackground(new Color(169, 169, 169));
		buttondivision.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttondivision.setBounds(200, 215, 62, 37);
		frmCalculator.getContentPane().add(buttondivision);
		
		//plus button
		
		buttonplus = new JButton("+");
		buttonplus.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				historyString += screen.getText() + "+";
				history.setText(historyString);
				try {
					answer += calculate(screen.getText());
					lastInput = "+";
					
				} catch (Exception e1) {
					e1.printStackTrace();
					JOptionPane.showMessageDialog(null, "Number Format Exception");
				}
				screen.setText("");
				
			}
		});
		buttonplus.setBackground(new Color(169, 169, 169));
		buttonplus.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttonplus.setBounds(200, 265, 62, 37);
		frmCalculator.getContentPane().add(buttonplus);
		
		//minus button
		
		buttonminus = new JButton("-");
		buttonminus.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				historyString += screen.getText() + "-";
				history.setText(historyString);
				try {
					answer = calculate(screen.getText());
					lastInput = "-";
				} catch (Exception e1) {
					e1.printStackTrace();
					JOptionPane.showMessageDialog(null, "Number Format Exception");
				}
				screen.setText("");
			}
		});
		buttonminus.setForeground(new Color(0, 0, 0));
		buttonminus.setBackground(new Color(169, 169, 169));
		buttonminus.setFont(new Font("Arial Black", Font.BOLD, 20));
		buttonminus.setBounds(200, 315, 62, 37);
		frmCalculator.getContentPane().add(buttonminus);
		
		//delete button
		
		buttondelete = new JButton("DEL");
		buttondelete.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				String delete = null;
				
				if (screen.getText().length() > 0) {
					StringBuilder number = new StringBuilder(screen.getText());	//Number currently on screen is assigned to a stringbuilder string so it can be modified easily
					number.deleteCharAt(screen.getText().length() - 1);	//delete character at the length - 1
					delete = number.toString();
					screen.setText(delete);
				}
				
			}
		});
		
		buttondelete.setBackground(new Color(169, 169, 169));
		buttondelete.setFont(new Font("Arial Black", Font.BOLD, 11));
		buttondelete.setBounds(200, 120, 62, 37);
		frmCalculator.getContentPane().add(buttondelete);

//-----------------------------1ST BOTTOM ROW ----------------------------		
		
		//Binary Button
		
		buttonbinary = new JButton("BIN");
		buttonbinary.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				enterNumber = screen.getText();
				screen.setText(binary(enterNumber));
			}
		});
		buttonbinary.setForeground(new Color(255, 255, 255));
		buttonbinary.setBackground(new Color(119, 136, 153));
		buttonbinary.setFont(new Font("Arial Black", Font.BOLD, 7));
		buttonbinary.setBounds(10, 365, 50, 37);
		frmCalculator.getContentPane().add(buttonbinary);
		
		//Hexadecimal Button
		
		buttonhex = new JButton("HEX");
		buttonhex.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				enterNumber = screen.getText();
				screen.setText(hexadecimal(enterNumber));
			}
		});
		buttonhex.setForeground(new Color(255, 255, 255));
		buttonhex.setBackground(new Color(119, 136, 153));
		buttonhex.setFont(new Font("Arial Black", Font.BOLD, 7));
		buttonhex.setBounds(80, 365, 50, 37);
		frmCalculator.getContentPane().add(buttonhex);
		
		//x squared button
		
		buttonsquared = new JButton("x\u00B2");
		buttonsquared.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				enterNumber = screen.getText();
				screen.setText(squared(enterNumber));
			}
		});
		buttonsquared.setForeground(new Color(255, 255, 255));
		buttonsquared.setBackground(new Color(119, 136, 153));
		buttonsquared.setFont(new Font("Arial Black", Font.BOLD, 13));
		buttonsquared.setBounds(148, 365, 50, 37);
		frmCalculator.getContentPane().add(buttonsquared);
		
		//x cubed button
		
		buttoncubed = new JButton("x\u00B3");
		buttoncubed.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				enterNumber = screen.getText();
				screen.setText(cubed(enterNumber));
				numberArray[index] = screen.getText();
				index++;
			}
		});
		buttoncubed.setBackground(new Color(119, 136, 153));
		buttoncubed.setForeground(new Color(255, 255, 255));
		buttoncubed.setFont(new Font("Arial Black", Font.BOLD, 13));
		buttoncubed.setBounds(212, 365, 50, 37);
		frmCalculator.getContentPane().add(buttoncubed);

// ------------------- MEMORY BUTTON ROW-------------------------		
		
		//memory store
		
		memorystore = new JButton("MS");
		memorystore.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				memtemp = (screen.getText());
				memstore = Double.parseDouble(memtemp);
			}
		});
		
		memorystore.setForeground(Color.WHITE);
		memorystore.setFont(new Font("Arial Black", Font.BOLD, 8));
		memorystore.setBackground(new Color(119, 136, 153));
		memorystore.setBounds(10, 413, 50, 37);
		frmCalculator.getContentPane().add(memorystore);
		
		//memory recall
		
		memoryrecall = new JButton("MR");
		memoryrecall.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				screen.setText("");
				memtemp = Double.toString(memstore);
				screen.setText(memtemp);								//calls recall memory function in function class
			}
		});
		memoryrecall.setForeground(Color.WHITE);
		memoryrecall.setFont(new Font("Arial Black", Font.BOLD, 8));
		memoryrecall.setFocusable(false);
		memoryrecall.setBackground(new Color(119, 136, 153));
		memoryrecall.setBounds(80, 413, 50, 37);
		frmCalculator.getContentPane().add(memoryrecall);
		
		//memory add button
		
		memoryadd = new JButton("M+");
		memoryadd.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				memtemp = screen.getText();
				memstore = memstore + (Double.parseDouble(memtemp));
			}
		});
		
		memoryadd.setForeground(Color.WHITE);
		memoryadd.setFont(new Font("Arial Black", Font.BOLD, 8));
		memoryadd.setBackground(new Color(119, 136, 153));
		memoryadd.setBounds(148, 413, 50, 37);
		frmCalculator.getContentPane().add(memoryadd);
		
		//memory subtract button
		
		memorysubtract = new JButton("M-");
		memorysubtract.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				memtemp = screen.getText();
				memstore = memstore - (Double.parseDouble(memtemp));
			}
		});
		memorysubtract.setForeground(Color.WHITE);
		memorysubtract.setFont(new Font("Arial Black", Font.BOLD, 9));
		memorysubtract.setBackground(new Color(119, 136, 153));
		memorysubtract.setBounds(212, 413, 50, 37);
		frmCalculator.getContentPane().add(memorysubtract);
//---------------------- CLEAR BUTTON ----------------
		buttonclear = new JButton("CLEAR");
		buttonclear.addActionListener(new ActionListener() {							//action for when button is pressed
			public void actionPerformed(ActionEvent arg0) {
				history.setText("");
				screen.setText(null);													//sets number displayed on the screen
				stack.clear();
				historyString="";
				index=0;
				answer = 0;
				memstore = 0;
			}
		});
		buttonclear.setForeground(new Color(0, 0, 0));
		buttonclear.setFont(new Font("Arial Black", Font.BOLD, 13));
		buttonclear.setBackground(new Color(205, 92, 92));
		buttonclear.setBounds(75, 461, 123, 37);
		frmCalculator.getContentPane().add(buttonclear);
	}
}
