#include <stdio.h>
#include <string.h>

int main(int argc, const char **argv, const char **envp)
{
  char v4[128];

  memset(v4, 0, sizeof(v4));
  setvbuf(stdout, 0LL, 2, 0LL);
  setvbuf(stdin, 0LL, 2, 0LL);
  puts("Welcome GWNU ctf.");
  printf("This will help you : %p\n",v4);
  gets(v4);
  return 0;
}  
