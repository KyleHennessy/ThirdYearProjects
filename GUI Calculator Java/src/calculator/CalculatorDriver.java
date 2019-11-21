//KYLE HENNESSY
//C00227463
package calculator;

import java.awt.EventQueue;

public class CalculatorDriver {
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CalculatorWindow window = new CalculatorWindow();
					window.frmCalculator.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
				
				
		
	
	}
}
