//******************************************************************************
// A4_Singh.java
// Author: Karanbir Singh 100397449
// A GUI program using JavaFX. This program allows the user to select toppings
// for a pizza order. The user can add a 10% tip if he want. The total price
// of the pizza with/without toppings will be calculated and shown.
//******************************************************************************
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.event.ActionEvent;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.geometry.HPos;

public class A4_Singh extends Application{
    
    private double cost;                //total cost
    private double costWithoutTip;      //cost without tip- used to get amount before tip
    private Label labelCost;            //a lable showing the total cost
   
    //all 4 toppings checkboxes
    CheckBox extraCheese = new CheckBox("Extra Cheese");
    CheckBox pepperoni = new CheckBox("Pepperoni");
    CheckBox sausage = new CheckBox("Sausage");
    CheckBox greenPepper = new CheckBox("Green Pepper");
    CheckBox tip = new CheckBox("check to add 10% tip");
    boolean tipCounter;
    
    public void start(Stage primaryStage){
        cost = 10.0;    //cost of a plain pizza
        
        //setOnAction property invoked when extrachesse and pepperoni checkbox selected
        extraCheese.setOnAction(this::processToppingBoxAction);
        pepperoni.setOnAction(this::processToppingBoxAction);
        
        //create a VBox object and add the checkboxes vertically to it
        VBox toppings1 = new VBox(extraCheese, pepperoni);
        toppings1.setSpacing(20); //add spacing between check boxes
                
        //setOnAction property invoked when sausage and greenPepper checkbox selected
        sausage.setOnAction(this::processToppingBoxAction);
        greenPepper.setOnAction(this::processToppingBoxAction);
        
        //create a VBox object and add the checkboxes vertically to it
        VBox toppings2 = new VBox(sausage, greenPepper);
        toppings2.setSpacing(20); //add spacing between check boxes
        
        //setOnAction property invoked when tip checkbox selected
        tip.setOnAction(this::processTipBoxAction);
        
        //create a label showing the total cost
        labelCost = new Label("Pizza Cost: $10.00");
        
        //create a GridPane object
        GridPane root = new GridPane();
        root.setAlignment(Pos.CENTER);
        root.setVgap(20);   //add gap between rows
        root.setHgap(25);
        
        //aligning tip and Price of pizza to center
        GridPane.setHalignment(labelCost, HPos.CENTER);
        GridPane.setHalignment(tip, HPos.CENTER);

        
        //add toppings check boxes and label to the GridPane object
        root.add(toppings1, 0, 0);
        root.add(toppings2, 1, 0);
        root.add(tip, 0, 1, 2, 1);
        root.add(labelCost, 0, 2, 2, 1);
        //arguments for the add() methods: node, colIndex, rowIndex,
        //column span (occupy multiple cell-columns), row span
        
        
        Scene scene = new Scene(root, 400, 200);
        primaryStage.setTitle("Karanbir Singh's Pizza");
        primaryStage.setScene(scene);
        primaryStage.show();
    }
    //**************************************************************************
    // Updates cost based on a topping being selected or unselected
    //**************************************************************************
    public void processToppingBoxAction(ActionEvent event) {
        CheckBox box = (CheckBox) event.getSource();
        double tipAmount = 0;
        
        //if both toppings AND tip is selected
        if(box.isSelected() && tip.isSelected())
        {
            tipAmount = cost * 0.10;
        }
        //when any topping checkbox is selected tip checkbox is unselected
        //and tip is also removed
        if (box.isSelected())
        {
            tip.setSelected(false);
            cost = cost - tipAmount;
            
            //removing the tipAmount from cost gives value lesser than original 
            //cost before tip. Therefore, that cost is rounded to nearest 0.50.
            if(cost % 1 != 0.50)  
            {
                cost = (Math.round(cost * 2) / 2);     
            }
            //cost reset to price of pizza and toppings only as tip gets
            //removed when any topping is added
            cost += 0.50;     
        }
        else
        {
            cost -= 0.50;
        }
        
        costWithoutTip = cost;

        labelCost.setText("Pizza Cost: $"+ String.format("%.2f",cost));
    }
    public void processTipBoxAction(ActionEvent event) {
        CheckBox box2 = (CheckBox) event.getSource();
        
        //if any of checkbox of toopings or tip is selected
        //In this If statement, there is one more If-Else used to add 10% tip 
        //when tip checkbox is selected
        if (extraCheese.isSelected() || pepperoni.isSelected() || sausage.isSelected() || greenPepper.isSelected() || tip.isSelected() )
        {
            if (box2.isSelected())
            {
                cost = cost + (cost * 0.10);
            }
            else 
            {
                cost = cost - (costWithoutTip * 0.10) ;     //when tip is not selected
            }
        }
        //when no checkbox is selected
        else
        {
            cost = 10;
        }
        labelCost.setText("Pizza Cost: $"+ String.format("%.2f",cost));
    }
    
    //main is optional for application
    public static void main(String[] args) {
        launch(args);
    }
}