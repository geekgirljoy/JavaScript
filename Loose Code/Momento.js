
// The Momento pattern is used to save and restore the state of an object.
// A memento is a snapshot of an object's state.
var Memento = {// Namespace: Memento
    savedState : null, // The saved state of the object.

    save : function(state) { // Save the state of an object.
        this.savedState = state;
    },

    restore : function() { // Restore the state of an object.
        return this.savedState;
    }
};

// The Originator is the object that creates the memento.
// defines a method for saving the state inside a memento.
var Originator = {// Namespace: Originator
        state : null, // The state to be stored

        // Creates a new originator with an initial state of null
        createMemento : function() { 
            return {
                state : this.state // The state is copied to the memento.
            };
        },
        setMemento : function(memento) { // Sets the state of the originator from a memento
            this.state = memento.state;
        }
    };


// The Caretaker stores mementos of the objects and
// provides operations to retrieve them.
var Caretaker = {// Namespace: Caretaker
        mementos : [], // The mementos of the objects.
        addMemento : function(memento) { // Add a memento to the collection.
            this.mementos.push(memento);
        },
        getMemento : function(index) { // Get a memento from the collection.
            return this.mementos[index];
        }
    };



var action_step = "Foo"; // The action to be executed/the object state to be stored.
var action_step_2 = "Bar"; // The action to be executed/the object state to be stored.


// set the initial state
Originator.state = action_step;
Caretaker.addMemento(Originator.createMemento());// save the state to the history
console.log("Initial State: " + Originator.state); // Foo

// change the state
Originator.state = action_step_2;
Caretaker.addMemento(Originator.createMemento()); // save the state to the history
console.log("State After Change: " + Originator.state); // Bar


// restore the first state - undo
Originator.setMemento(Caretaker.getMemento(0));
console.log("State After Undo: " + Originator.state); // Foo

// restore the second state - redo
Originator.setMemento(Caretaker.getMemento(1));
console.log("State After Redo: " + Originator.state); // Bar
