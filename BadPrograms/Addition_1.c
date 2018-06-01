#include <stdio.h>
#define magic(A,B,C) asm("addl %%ebx,%%eax \n\t addl %%ecx, %%eax \n\t movl %%eax, %%ebx \n\t andl $0x507A1014, %%eax \n\t movl %%ebx, %%ecx \n\t andl $0x86044A81, %%ebx \n\t andl $0x2981A56A, %%ecx \n\t":"=a"(A),"=b"(B),"=c"(C):"a"(A),"b"(B),"c"(C))

//worked when I complied using an online gcc compiler thingy...idk
int main() {
    int A=43,B=43,C=53;
    scanf("%d %d %d",&A,&B,&C);
    magic(A,B,C);
    printf("%d",A^B^C);
    return 0;
}
