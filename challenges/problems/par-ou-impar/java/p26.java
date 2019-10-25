public class p26{
	
	public static void main(String args[]){
		if(args[0] != null){
			int valor = Integer.parseInt(args[0]);
			if (valor % 2 == 0){
				System.out.println("numero par");
			}else{
				System.out.println("numero impar");
			}
		}
	}
	
}
