def func_expander(func):
    def wrapper(*arg):
        if type(*arg) == int:        
            ret = func(*arg)
            return ret
        else:
            return [func(a) for a in arg[0]]

    return wrapper