'''Horrid addition'''

def add_Three(three):
  '''Used strings cause originally was going write if two == '1+2': return 3 etc then realised there was 3 inputs and if I generated all cases it would be a large file and meh'''
  num = eval(three) + add_Three.carry
  if num > 10:
    num -= 10
    add_Three.carry += 1
  else:
    add_Three.carry = 0
  if num > 10:
    num -= 10
    add_Three.carry += 1
  else:
    add_Three.carry = 0
  return str(num)
add_Three.carry = 0

A = str(input("enter A:")).strip()
B = str(input("enter B:")).strip()
C = str(input("enter C:")).strip()
biggest = len(max([A,B,C], key=len)) + 1

A = A.rjust(biggest, "0")
B = B.rjust(biggest, '0')
C = C.rjust(biggest, '0')


answer = [add_Three("{} + {} + {}".format(a,b,c)) for (a,b,c) in list(zip(A,B,C))[::-1]][::-1]
if answer[0] == '0':
  answer.pop(0)

print("\nThe answer is..." )
print("".join(list(answer)))
