#Module 2 Required Coding Activity

# Funcion
def imp_funtion(my_input, animals):
    if my_input.upper() == 'QUIT':
        return(" Se ha elegido la opción de salir ", my_input," y la lista actual es: ",animals)
    elif my_input in animals:
        animals.remove(my_input)
        return(" Se ha eliminado de la lista:", my_input, " y la lista actual es: ",animals)
    else:
        animals.insert(0,my_input)
        return(" Se ha inceertado a la lista:", my_input, " y la lista actual es: ",animals)

# Valores Iniciales
animals = ["cat", "dog", "lion"]
my_input = ""

# Procedimiento
while my_input.upper() != 'QUIT' and len(animals) != 0:
    print(" Capurar un nuevo item:  ")
    my_input = input() 
    print(imp_funtion(my_input, animals))

print(" Fin del programa: EL PROGRAMA TERMINO")
