from key_name_matching import number_to_char
from three_code import three_code
from four_code import four_code

def five_code(keys):

    root_codename = four_code(keys[:4])
    root = keys[0]
    top  = keys[2]
    add  = keys[4]

    if type(root_codename) is str:
        if add-top == 6:
            return root_codename + '(♭9)'
        
        if add-top == 7:
            return root_codename + '(9)'

        if add-top == 8:
            return root_codename + '(#9)'

        if add-top == 10:
            return root_codename + '(11)'

        if add-top == 11:
            return root_codename + '(#11)'

        if add-top == 13:
            return root_codename + '(♭13)'

        if add-top == 14:
            return root_codename + '(13)'



    ###############
    ## root code ##
    ###############
    
#    root_codename = four_code(keys[1:])

#    if type(root_codename) is str:
#        return f'{number_to_char(root)}/{root_codename}'

    return keys






