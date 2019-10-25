#include <stdio.h>
#include <stdlib.h>

int main(int argc, char **argv){
	if(argv[1]){
		int valor = atoi(argv[1]);
		if (valor % 2 == 0){
			printf("numero par\n");
		}else{
			printf("numero impar\n");
		}
	}
    return 0;
}

