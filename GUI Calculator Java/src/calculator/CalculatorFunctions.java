//KYLE HENNESSY
//C00227463


package calculator;

import java.util.ArrayList;
import java.util.Stack;

public class CalculatorFunctions{
	
	String [] numberArray = new String[50];	//array for storing the numbers and operators
	Stack<String> stack = new Stack<String>();		//stack that stores numbers and operations
	int index = 0;							//index for numbers array
	double result;							//result of two numbers being calculated 
	double answer=0;						//answer in double 
	String stringAnswer;					//answer in string form
	double memstore;						//memory storage
	double temp = 0;
	String memtemp;							//temporary string to take in text from screen to convert to double for memory storage
	double temp1 = 0;						//temporary storage for calculating result
	String conversion;						//for converting numbers to either binary, hexadecimal squared or cubed
	String historyString = "";				//string that contains history of all numbers entered by the user
	String currentNum;						//currentNum that has been pressed
	
	
	public double calculate (String number) throws Exception {	//Number currently inputted by user is the argument 
		temp = 0;
		number = number.replaceAll(" ", "");	
		char[] arr = number.toCharArray();					//current number is converted to a character array
		
		StringBuilder numberString = new StringBuilder();	//new String builder string that so it can be modified easily
		
		for (int i = 0; i < arr.length; i++) {				//for loop that only terminates if i is less than the the length of the char array
			if (arr[i] == ' ')								//if the array contains any spaces, it skips to the next one
				continue;
			//exception if operator is first
			if (arr[0] == '+') {
				throw new Exception ();
			}
			else if (arr[0] == '-') {
				throw new Exception ();	
			}
			else if (arr[0] == '*') {
				throw new Exception ();	
			}
			else if (arr[0] == '/') {
				throw new Exception ();	
			}//end of if errorhandling if statement
			
			
			if (arr[i] >= '0' && arr[i] <= '9' || arr[i] == '.') {	//if the current position meets any of these requirements, it is added to the string builder string
				numberString.append(arr[i]);						//append each number to end of stack string if it is a number
				if (i == arr.length - 1) {
					stack.push(numberString.toString());			//if the index of array is the same as the same as the length, the string is pushed into stack
				}
			} 
			
			else {													//if the string is greater than 0 than it is pushed onto stack
					if (numberString.length() > 0) {
						stack.push(numberString.toString());
						numberString = new StringBuilder();			//stack string is initialized
					}
					
					if (arr[i] !=')') {
						stack.push(new String(new char[] { arr[i] }));
					}
				
			}
		}//end of for loop
		ArrayList<String> numberArray = new ArrayList<String>();
		while (!stack.isEmpty()) {
			String elem = stack.pop();
			numberArray.add(0,elem);
		}
		
		int index = numberArray.indexOf("/");
			if(numberArray.get(index + 1) == "0") {
				throw new Exception ();
			}//divide by zero error exception
		
		
		for (int i = numberArray.size() - 1; i > 0 ; i = i - 2) {
			if (numberArray.get(i - 1).equals("-")) {
				temp = temp - Double.valueOf(numberArray.get(i));
			}
			
			else if (numberArray.get(i - 1).equals("*")) {
				temp = temp * Double.valueOf(numberArray.get(i));
			}
			
			else if (numberArray.get(i - 1).equals("/")) {
				temp = temp / Double.valueOf(numberArray.get(i));
			}
			
			else {
				temp = Double.valueOf(numberArray.get(i));
			} //end of if
		}//end of for loop
		temp += Double.valueOf(numberArray.get(0));
		return temp;		//returns the value 
		
	} //end of method
	
	public String squared(String enterNumber) {
		temp1 = Double.parseDouble(enterNumber);
		temp1 = temp1 * temp1;
		conversion = Double.toString(temp1);
		temp1 = 0;
		return conversion;
		
	}
	
	public String cubed(String enterNumber) {
		temp1 = Double.parseDouble(enterNumber);
		temp1 = temp1 * temp1 * temp1;
		conversion = Double.toString(temp1);
		return conversion;
	}
	
	public String binary(String enterNumber) {
		temp1 = Double.parseDouble(enterNumber);
		conversion = Integer.toBinaryString((int) temp1);
		return conversion;
	}
	
	public String hexadecimal(String enterNumber) {
		temp1 = Double.parseDouble(enterNumber);
		conversion = Integer.toHexString((int)temp1);
		return conversion;
	}
}

