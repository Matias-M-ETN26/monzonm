# imprimir array
""" 
vercnum=[1,2,3,4,5]
for i in range(len(vercnum)):
    if (vercnum[i] == 5):
        print("el num es:",vercnum[i])
     else:
        print("el num x num es:", vercnum[i] * vercnum[i])        
"""
# calculadora basica
"""
num1 = int(input("ingrese el primer numero: "))
operacion= input("ingrese operacion(+,-,*,/): ")
num2 = int(input("ingrese el segundo numero: "))
if operacion == "*" :
    mul = num1 * num2
    print(f"{num1} * {num2} es: {mul}")
elif operacion == "/":
    div = num1 / num2
    print(f"{num1} / {num2} es: {div}")
elif operacion == "+":
    suma = num1 + num2
    print(f"{num1} + {num2} es: {suma}")
elif operacion == "-":
    res = num1 - num2
    print(f"{num1} - {num2} es: {res}")
#promedio array
"""
"""
cantarr= int(input("ingrese longitud del array: "))
for i in range(cantarr):
    i = int(input("ingrese el numero que sera promediado: "))
    arr =[i]
sumarr = 0
for i in range(len(arr)):
    sumarr = sumarr + arr[i]
print("el numero promediado es: ", sumarr / int(len(arr)))
"""
# ejercicio
# 1)con el vector dado calucular la suma y el promedio de las notas
# 2)mostrar las notas y decir que estan desaprobadas
# 3)modificar el vector y modificar la lista
"""
notas = [10,2,5,6,8,3,7,1,5,9]
notas1 = 0
for i in range(len(notas)):
    notas1 = notas1 + notas[i]
notasPr = notas1 / len(notas)
print(f"la suma de todas las notas es {notas1} y el promedio es {notasPr}")
print("---------------------------------------")
for i in range(len(notas)):
    if notas[i] >=6:
        print(f"el alumno que saco: {notas[i]} aprobo")
        print("---------------------------------------")
    else:
        print(f"el alumno que saco: {notas[i]} desaprobo")
        print("---------------------------------------")

print("se generaron nuevas notas")
print("---------------------------------------")

for i in range(len(notas)):
    notas[i] = round(uniform(1, 10))
notas1 = 0
notas[0] = 9
notas[1] = 9
notas[2] = 9
notas[3] = 9
notas[4] = 9
notas[5] = 9
notas[6] = 9
notas[7] = 9
notas[8] = 9
notas[9] = 9
for i in range(len(notas)):
    notas1 = notas1 + notas[i]
notasPr = notas1 / len(notas)
print(f"la suma de todas las notas es {notas1} y el promedio es {notasPr}")
print("---------------------------------------")
for i in range(len(notas)):
    if notas[i] >=6:
        print(f"el alumno que saco: {notas[i]} aprobo")
        print("---------------------------------------")
    else:
        print(f"el alumno que saco: {notas[i]} desaprobo")
        print("---------------------------------------")
"""
"""
a= [49999999999999999999999,3,5,7,4,5]
o = sorted(a)
print(o)
"""
#Ejercicios
#ordenar un vector dado de forma creciente
#¿se puede convinar python con javascript?¿como?
#correjir puntos incorrectos de la evaluación del classroom
#realizar ejercicios hechos en clase en html
#investiga sobre el diseño de funciones en python, escribir ejemplos
#ingresa vector de 8 elementos y generar otro con elementos invertidos
#crear vector con elementos ingresados por el usuarios y buscar un elementos y decir si se encontro o no
#dado un vector con n°positivos y negativos, generar otro con positivos