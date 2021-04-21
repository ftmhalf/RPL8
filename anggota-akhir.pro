program:- read(List), akhir(List,A), write(A), nl.
akhir([],0):- !.
akhir([A],A):- !.
akhir([_|T],A):- akhir(T,A).
:- program.