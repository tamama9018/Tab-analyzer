from key_name_matching import number_to_char

def three_code(keys):

    root = keys[0]
    mid  = keys[1]
    top  = keys[2]

    if mid-root == 4 and top-mid == 3:
        codename = number_to_char(root)
        return codename

    if mid-root == 3 and top-mid == 4:
        codename = number_to_char(root) + 'm'
        return codename

    if mid-root == 3 and top-mid == 3:
        codename = number_to_char(root) + 'dim'
        return codename

    if mid-root == 4 and top-mid == 4:
        codename = number_to_char(root) + 'aug'
        return codename

    if mid-root == 2 and top-mid == 5:
        codename = number_to_char(root) + 'sus2'
        return codename
    
    if mid-root == 5 and top-mid == 2:
        codename = number_to_char(root) + 'sus4'
        return codename

    return keys

