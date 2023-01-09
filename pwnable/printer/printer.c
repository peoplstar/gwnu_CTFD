//gcc -o printer printer.c -fno-stack-protector -no-pie
#include <stdio.h>
#include <stdlib.h>
#include <signal.h>
#include <unistd.h>

void init() {
  setvbuf(stdin, 0, 2, 0);
  setvbuf(stdout, 0, 2, 0);
}

void get_shell() {
  char *cmd = "/bin/sh";
  char *args[] = {cmd, NULL};

  execve(cmd, args, NULL);
}

int main() {
  char name[0x50];

  init();
  
  printf("[*]====Input Printer====[*]\n");
  fflush(stdout);
  printf("[*] Input Your Name : ");
  fflush(stdout);
  read(0, name, 100);
  
  printf("[*] YOUR NAME IS %s", name);
  return 0;
}