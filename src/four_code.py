from key_name_matching import number_to_char
from three_code import three_code

def four_code(keys):
    root = keys[0]
    mid  = keys[1]
    top  = keys[2]
    add  = keys[3]

    ##################
    ## tention code ##
    ##################
    root_codename = three_code(keys[:3])
    
    if type(root_codename) is str:
        tention = add - top

        if tention == 4:
            if root_codename[-3:] == 'dim':
                return number_to_char(root) + 'm7♭5'
            return root_codename + 'M7'

        if tention == 3:
            return root_codename + '7'

        if tention == 2 or tention == 14:
            return root_codename + '6'

        if tention == 6:
            return root_codename + 'add♭9'
        
        if tention == 7:
            return root_codename + 'add9'

        if tention == 8:
            return root_codename + 'add#9'

        if tention == 10:
            return root_codename + 'add11'

        if tention == 11:
            return root_codename + 'add#11'

        if tention == 13:
            return root_codename + 'add♭13'



    ###############
    ## root code ##
    ###############
    
    
    root_codename = three_code(keys[1:])

    if type(root_codename) is str:
        return f'{number_to_char(root)}/{root_codename}'


    ###############
    ## omit code ##
    ###############
    

    return keys






