def number_to_char(key):
    key = key%12
    if   key == 0:
        return 'C'
    elif key == 1:
        return 'C#'
    elif key == 2:
        return 'D'
    elif key == 3:
        return 'D#'
    elif key == 4:
        return 'E'
    elif key == 5:
        return 'F'
    elif key == 6:
        return 'F#'
    elif key == 7:
        return 'G'
    elif key == 8:
        return 'G#'
    elif key == 9:
        return 'A'
    elif key == 10:
        return 'A#'  
    elif key == 11:
        return 'B'   
    else:
        return '?'