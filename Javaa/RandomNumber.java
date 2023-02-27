public class RandomNumber {
  public static void main( String[] args ) {
    int min = 50; // *Minimum value of range
    int max = 100; //* */ Maximum value of range
     //*Print the min and max  
    System.out.println("Random value in int from "+ min + " to " + max + ":");
    //* Generate random int value from min to max
    int random = (int)Math.floor(Math.random() * (max - min + 1) + min);
    // *Printing the generated random numbers
    System.out.println(random);
  }

}